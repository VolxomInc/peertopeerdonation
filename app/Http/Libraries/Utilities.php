<?php


namespace App\Http\Libraries;

use Route;
use Auth;
use DB;
use Mail;
use Illuminate\Log\Writer;
class Utilities
{
    public static function sendEmail($template,$data,$to_email,$to_name,$subject){
            Mail::send($template, $data, function ($message) use ($to_email,$to_name,$subject) {
                $message->to($to_email, $to_name)->subject($subject);
            });
    }
}