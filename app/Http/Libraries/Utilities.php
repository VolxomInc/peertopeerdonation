<?php


namespace App\Http\Libraries;

use Route;
use Auth;
use DB;
use Mail;
use Illuminate\Log\Writer;
use Image;
class Utilities
{
    public static function sendEmail($template,$data,$to_email,$to_name,$subject){
            Mail::send($template, $data, function ($message) use ($to_email,$to_name,$subject) {
                $message->to($to_email, $to_name)->subject($subject);
            });
    }

    //Upload Ads
    public static function uploadPaymentOfProof($data)
    {
        $fileName = $data['picture']->getClientOriginalName();
        $path = '/uploads/images/';
        $savepath = 'uploads/images/';
        if(!is_dir(($savepath)))
            \File::makeDirectory($savepath, 0775, true, true);
        $img = Image::make($data['picture']);
        if($img->save(public_path() . $path . $fileName)){
            return $savepath . $fileName;
        }
        return false;
    }
}