<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GestMessageMail;
use Redirect;

class GestMessageMailController extends Controller
{
    public function send(Request $request) {
        $data = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'country' => $request->country,
            'city' => $request->city,
            'message' => $request->message
        ];

        try {
            Mail::to('test@test.ge')->send(new GestMessageMail($data));
            return Redirect::back()->with('success', 'No errors, all sent successfully!');
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['mail' => 'Mail sending failed.']);
        }
    }
}
