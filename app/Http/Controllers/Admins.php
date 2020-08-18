<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Album;
use App\Announcement;
use App\HelperClasses\HelperClass;
use App\User;
use Carbon\Carbon;
use App\ProvisionalRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Admins extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('home');
    }

    public function provisional_list()
    {
        $data = [
            'title' => "Provisional Registration List",
            'list' => ProvisionalRegistration::all()
        ];
        return view('backend.student_list')->with($data);
    }

    public function admission_list()
    {

        $data = [
            'title' => "Admission List",
            'list' => Admission::all()
        ];
        return view('backend.student_list')->with($data);
    }
    public function notices()
    {
        $data['notices'] = Announcement::orderBy('expiry_date', 'asc')->get();
        $data['annotype'] = HelperClass::getAnnouncementType();
        return view('backend.notices', $data);
    }
    public function saveNotice(Request $request)
    {
        $request->validate(
            [
                "expiry_date" => "date|required",
                "details" => "required",
                "type" => "required",
                "download" => "mimes:jpeg,png,jpg,pdf,|max:2000",
            ]
        );
        if ($request->has('download')) {
            $file = $request->file('download');
            $file_name = "notice_" . time() . '.' . $file->getClientOriginalExtension();
            $destination_folder = 'uploads/notices';
            if ($file->move($destination_folder, $file_name)) {
                $request->request->add(['attachment' => $file_name]);
            }
        }
        $q = Announcement::create($request->input());
        return HelperClass::redirectWithMsg("save", $q);
    }
    public function deleteNotice($id)
    {
        $row = Announcement::where("id", $id)->first();
        $file = 'uploads/notices/' . $row->attachment;
        if ($row->attachment !== null) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
        $q = Announcement::find($id)->delete();
        return HelperClass::redirectWithMsg("delete", $q);
    }
    public function gallery()
    {
        $data['albums'] = Album::all();
        return view('backend.gallery', $data);
    }
    public function addAlbum()
    {
        $data['albums'] = [];
        $data['heading'] = "Add New Album";
        return view('backend.gallery.add_album', $data);
    }
    public function saveAlbum(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => "required"
        ]);
        $q = Album::create($request->input());
        return HelperClass::redirectWithMsg("save", $q, "/admin/gallery/upload_images/" . $q->id);
    }

    /**
     * upload image from view
     */
    public function uploadImages($id)
    {
        $data['id'] = $id;
        $data['album'] = Album::where("id", $id)->first();
        $data['photos'] = json_decode($data['album']->photos);
        return view("backend.gallery.upload_images", $data);
    }

    public function saveUploadedImages(Request $request)
    {
        $request->validate([
            "images" => "required",
            "images.*" => "image|mimes:jpeg,png,jpg,gif|max:1024"
        ]);

        $album_data = Album::where("id", $request->id)->first();

        if ($request->hasFile("images")) {
            $images = $request->file("images");
            foreach ($images as $file) {
                $destinationPath = 'uploads/albums'; // upload path
                $name = str_replace(" ", "_", $album_data->name) . uniqid() . "." . $file->getClientOriginalExtension();
                if (!$file->move($destinationPath, $name)) {
                    return "failed";
                }
                $data[] = "$name";
            }
            $oldPhotos = $data;
            if ($album_data->photos !== null) {
                $oldPhotos = array_merge(json_decode($album_data->photos), $data);
            }
            $save = ["photos" => json_encode($oldPhotos)];
            $q = Album::where('id', $request->id)->update($save);
            return HelperClass::redirectWithMsg("save", $q, "/admin/gallery/upload_images/" . $request->id);
        }
    }
    public function deleteImage($id, $image)
    {
        $q = true;
        $file  = 'uploads/albums/' . $image;
        $album = Album::where('id', $id)->first();
        $photos = json_decode($album->photos);
        // return count($photos);
        if (count($photos) >= 2) {
            foreach ($photos as $photo) {
                if ($photo !== $image) {
                    $old[] = $photo;
                }
            }
        } else {
            $old = [];
        }
        if (file_exists($file)) {
            unlink($file);
            $q = Album::where('id', $id)->update(['photos' => json_encode($old)]);
        }
        return HelperClass::redirectWithMsg("delete", $q, "/admin/gallery/upload_images/" . $id);
    }
    public function albumCover($id, $coverImg)
    {
        $q = Album::where("id", $id)->update(['feature_image' => $coverImg]);
        return HelperClass::redirectWithMsg("update", $q, "/admin/gallery/upload_images/" . $id);
    }
    public function changePassword()
    {
        return view('backend.change_password');
    }
    public function saveChangePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:5',
            'password' => 'required|confirmed|min:5',
        ]);

        $user = User::find(Auth::user()->id)->first();
        if (Hash::check($request->current_password, $user->password)) {
            $q = User::where("id", Auth::user()->id)->update(['password' => Hash::make($request->password)]);
            if ($q) {
                return redirect('/admin/change_password/')->with("message", "password Updated Successfully");
            } else {
                return redirect('/admin/change_password/')->with("message", "Something Went Wrong");
            }
        }
        return redirect('/admin/change_password')->with("message", "Current Password Not Match");
    }
}
