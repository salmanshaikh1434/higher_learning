<?php

namespace App\Http\Controllers;

use App\Album;
use App\Announcement;
use App\HelperClasses\HelperClass;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "notice" => [],
            'circular' => [],
            'news_and_announcement' => []
        ];
        $announcement = Announcement::where("expiry_date", ">=", date("Y-m-d"))->get();
        if (count($announcement) != 0) {
            $data = HelperClass::noticeSeparator($announcement);
        }
        return view('welcome', $data);
    }
    public function vision()
    {
        return view('front_pages.vision');
    }
    public function history()
    {
        return view('front_pages.history');
    }
    public function principal_speech()
    {
        return view('front_pages.principal_speech');
    }
    public function admission_procedure()
    {
        return view('front_pages.admission_procedure');
    }
    public function fees_structure()
    {
        return view('front_pages.fees_structure');
    }
    public function scholarship()
    {
        return view('front_pages.scholarship');
    }
    public function calendar()
    {
        return view('front_pages.calendar');
    }
    public function albums()
    {
        $data['albums'] = Album::all();
        return view('front_pages.albums', $data);
    }
    public function album($id)
    {
        $data['album'] = Album::where("id", $id)->first();
        $data['photos'] = json_decode($data['album']->photos);
        return view('front_pages.album', $data);
    }
}
