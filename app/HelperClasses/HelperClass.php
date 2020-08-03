<?php

namespace App\HelperClasses;

class HelperClass
{
    /**
     * redirectWithMessage
     * @param String $message message response save, delete , update 
     * @param String $response response received from query
     * @param String $url redirect url if blank return back to requested page
     * @return void - redirect 
     */
    public static function redirectWithMsg(string $message, $response, $url = null)
    {
        $hc = new HelperClass();
        $msg = $hc->messageChooser($message, $response);
        if ($url !== null) {
            return redirect($url)->with("message", $msg);
        }
        return redirect()->back()->with("message", $msg);
    }

    public static function getAnnouncementType()
    {
        return ["notice", "news_and_announcement", "circular"];
    }
    private function messageChooser(String $message, $response)
    {
        if ($response) {
            switch ($message) {
                case 'save':
                    $m = "Data Saved Successfully";
                    break;
                case "update":
                    $m = "Data Updated Successfully";
                    break;
                case "delete":
                    $m = "Data Deleted Successfully";
                    break;
                default:
                    $m = "Operation Success";
                    break;
            }
        } else {
            switch ($message) {
                case 'save':
                    $m = "Failed to Save Data";
                    break;
                case "update":
                    $m = "Failed to Update Data";
                    break;
                case "delete":
                    $m = "Failed to Delete Data";
                    break;
                default:
                    $m = "Operation Failed";
                    break;
            }
        }
        return $m;
    }
    public static function noticeSeparator($data)
    {
        // if(count($data) <= 0){
        //  return [];
        // }
        $anno = self::getAnnouncementType();
        foreach ($data  as $d) {
            $url = "#";
            if ($d->attachment !== null) {
                $url = '/download/notice/' . $d->id;
            }
            $d->attachment = $url;
            $separated[$anno[$d->type]][] = $d;
        }
        return $separated;
    }

    /**
     * file upload function 
     *
     * @param fileObject $file  file data received by post
     * @param string $prefix  file prefix to identify files -default blank
     * @param string $destinationFolder - location to save data -default uploads/registration/
     * @return string $name  name of file
     */
    public static function file_upload($file, $prefix = '', $destinationFolder = 'uploads/registration/')
    {
        $name = $prefix . '_' . uniqid() . "." . $file->getClientOriginalExtension();
        if ($file->move($destinationFolder, $name)) {
            return $name;
        }
    }
}
