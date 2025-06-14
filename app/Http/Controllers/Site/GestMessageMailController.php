<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\GestMessageMail;
use Illuminate\Mail\SentMessage;

use Redirect;

class GestMessageMailController extends Controller
{
    public function send(Request $request) {
        // $data = [
        //     'name' => 'temo'
        // ];

        $data = 'temo';

        $send_email = Mail::to('test@test.ge')->send(new GestMessageMail($data));

        // return Redirect::back()->with('message','Operation Successful !');

        if($send_email) {
            echo "ERROR! There was one or more failures.";
            return $send_email;
        } else {
            echo "No errors, all sent successfully!";
            return Redirect::back();
        }
    }
}
