<?php

/**
 * purpose of helper 
 * helper functions that usable in php blades
 */

use App\HelperClasses\HelperClass;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;

if (!function_exists("strToHtml")) {
    /**
     * strToHtml function convert string to html 
     * @param string $string
     * @return string $html 
     */
    function strToHtml(string $string)
    {
        return new HtmlString($string);
    }
}
if (!function_exists('announcementType')) {
    /**
     * announcementType - function use to return announcement type using index number of an array
     * @param integer $index - index number of array
     * @return string $title - title of an announcement
     */
    function announcementType(int $index)
    {
        $announcements = HelperClass::getAnnouncementType();
        return $announcements[$index];
    }
}

if (!function_exists("responseMessage")) {
    /**
     * responseMessage function used to show message received in flash 
     * @param object $error object or error response automatically received by validation class
     * @return void function return if any message received or any error found
     */
    function responseMessages($errors)
    {
        if (Session::has("message")) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <?php echo Session::get('message'); ?>
            </div>
<?php
        }

        if ($errors->any()) {
            echo '<div class="alert alert-danger"><ul>';
            foreach ($errors->all() as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo ' </ul></div>';
        }
    }

}
