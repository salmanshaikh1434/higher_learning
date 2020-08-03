<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Downloader extends Controller
{
    public function notice($id)
    {
        $row = Announcement::where("id", $id)->first();
        $file = 'uploads/notices/' . $row->attachment;
        return Response::download($file,null,["header('Content-Description: File Transfer')"]);
    }
}
