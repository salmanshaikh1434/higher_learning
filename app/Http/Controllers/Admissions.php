<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;
use App\HelperClasses\HelperClass;
use App\Mail\RegistrationMail;
use App\ProvisionalRegistration;
use Illuminate\Support\Facades\Mail;

class Admissions extends Controller
{
    public function admission()
    {
        return view('front_pages.admission.index');
    }
    public function NonGrantRegistration()
    {
        return view('front_pages.admission.registration.nongrant_registration');
    }

    public function saveRegistration(Request $request)
    {
        $request->validate([
            'firstname' => "required",
            'middlename' => "required",
            'lastname' => "required",
            'phone' => "required",
            'email' => "required|email",
            'dob' => "required|date",
            'sex' => "required",
            'cast' => 'required',
            'course' => 'required',
            'lastexam' => "required",
            'percentage' => "required",
            'lastinst' => "required",
            'txn_id' => "required",
            'txncopy' => "required",
            'txncopy' => 'mimes:png,jpeg,jpg|max:200',
            'photo' => "required",
            'photo' => 'mimes:jpeg,jpg,png|max:200',
            'qualification_certificate' => "required",
            'qualification_certificate' => 'mimes:jpeg,jpg,png|max:200',
            'cast_certificate' => 'mimes:png,jpeg,jpg|max:200',
            'indian' => "required",
            'acceptna' => "required",
        ]);

        $destinationFolder = 'uploads/registration/';
        if ($request->hasFile("qualification_certificate")) {
            $file = $request->file("qualification_certificate");
            $request->request->add(['attachment_last_exam' => HelperClass::file_upload($file, 'qualification_certificate', $destinationFolder)]);
        }
        if ($request->hasFile("txncopy")) {
            $file = $request->file("txncopy");
            $request->request->add(['attachment_txncopy' => HelperClass::file_upload($file, 'txncopy', $destinationFolder)]);
        }
        if ($request->hasFile("photo")) {
            $file = $request->file("photo");
            $request->request->add(['attachment_photo' => HelperClass::file_upload($file, 'profile', $destinationFolder)]);
        }
        if ($request->hasFile("cast_certificate")) {
            $file = $request->file("cast_certificate");
            $request->request->add(['attachment_cast_certificate' => HelperClass::file_upload($file, 'cast_certificate', $destinationFolder)]);
        }

        $q = ProvisionalRegistration::create($request->input());
        $registration_no = sprintf("%04s", $q->id);
        $name = $request->firstname . ' ' . $request->lastname;
        $mailInfo['name'] = $name;
        $mailInfo['registration_no'] = $registration_no;
        $mailInfo['course'] = $request->course;
        $mailInfo['txn_no'] = $request->txn_id;
        $mailInfo['mail_format'] = 'mail.student_registration_mail';
        Mail::to($request->email)->send(new RegistrationMail($mailInfo));
        return redirect("/message")->with("message", 'registration successfully done! Registration No. ' . $registration_no . ', for more information check your mail');
    }

    /**
     * Second & third year admission form
     *
     * @param Request $request
     * @return void
     */
    public function AdmissionForm()
    {
        return view('front_pages.admission.registration.admission_form');
    }

    public function saveAdmission(Request $request)
    {
        $request->validate([
            'firstname' => "required",
            'middlename' => "required",
            'lastname' => "required",
            'phone' => "required",
            'email' => "required|email",
            'dob' => "required|date",
            'sex' => "required",
            'cast' => 'required',
            'course' => 'required',
            'lastexam' => "required",
            'percentage' => "required",
            'lastinst' => "required",
            'txn_id' => "required",
            'amt_paid' => 'required',
            'txncopy' => "required",
            'txncopy' => 'mimes:png,jpeg,jpg|max:200',
            'photo' => "required",
            'photo' => 'mimes:jpeg,jpg,png|max:200',
            'qualification_certificate' => "required",
            'qualification_certificate' => 'mimes:jpeg,jpg,png|max:200',
            'cast_certificate' => 'mimes:png,jpeg,jpg|max:200',
            'indian' => "required",
            'acceptna' => "required",
        ]);

        $destinationFolder = 'uploads/registration/';
        if ($request->hasFile("qualification_certificate")) {
            $file = $request->file("qualification_certificate");
            $request->request->add(['attachment_last_exam' => HelperClass::file_upload($file, 'qualification_certificate', $destinationFolder)]);
        }
        if ($request->hasFile("txncopy")) {
            $file = $request->file("txncopy");
            $request->request->add(['attachment_txncopy' => HelperClass::file_upload($file, 'txncopy', $destinationFolder)]);
        }
        if ($request->hasFile("photo")) {
            $file = $request->file("photo");
            $request->request->add(['attachment_photo' => HelperClass::file_upload($file, 'profile', $destinationFolder)]);
        }
        if ($request->hasFile("cast_certificate")) {
            $file = $request->file("cast_certificate");
            $request->request->add(['attachment_cast_certificate' => HelperClass::file_upload($file, 'cast_certificate', $destinationFolder)]);
        }

        $q = Admission::create($request->input());
        $registration_no = sprintf("%04s", $q->id);
        $name = $request->firstname . ' ' . $request->lastname;
        $mailInfo['name'] = $name;
        $mailInfo['registration_no'] = $registration_no;
        $mailInfo['course'] = $request->course;
        $mailInfo['txn_no'] = $request->txn_id;
        $mailInfo['amt_paid'] = $request->amt_paid;
        $mailInfo['mail_format'] = 'mail.student_admission_mail';
        Mail::to($request->email)->send(new RegistrationMail($mailInfo));
        return redirect("/message")->with("message", 'registration successfully done! Registration No. ' . $registration_no . ', for more information check your mail');
    }
}
