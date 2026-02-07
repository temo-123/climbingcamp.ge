<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GestMessageMail;
use App\Models\SiteInfo;
use Redirect;
use Illuminate\Support\Facades\Http;

class GestMessageMailController extends Controller
{
    public function send(Request $request) {
        // Debug log reCAPTCHA secret key existence (without exposing full value)
        $recaptchaSecretKey = env('RECAPTCHA_SECRET_KEY');
        if (empty($recaptchaSecretKey)) {
            \Log::error('RECAPTCHA_SECRET_KEY is not set in .env');
            return Redirect::back()->withErrors(['recaptcha' => 'reCAPTCHA configuration error.']);
        }
        
        // Validate reCAPTCHA v2 checkbox token
        $recaptchaToken = $request->input('g-recaptcha-response');
        if (empty($recaptchaToken)) {
            \Log::error('reCAPTCHA token is missing from request');
            return Redirect::back()->withErrors(['recaptcha' => 'Please complete the CAPTCHA to send your message.']);
        }
        
        // Direct HTTP call to Google's reCAPTCHA API (no library dependency)
        $recaptchaResponse = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaToken,
            'remoteip' => $request->ip()
        ]);
        
        $recaptchaData = $recaptchaResponse->json();
        
        if (!$recaptchaData['success']) {
            $errorCodes = $recaptchaData['error-codes'] ?? [];
            \Log::error('reCAPTCHA verification failed: ' . json_encode($errorCodes));
            return Redirect::back()->withErrors(['recaptcha' => 'Please complete the CAPTCHA to send your message.']);
        }

        $data = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'country' => $request->country,
            'city' => $request->city,
            'message' => $request->message
        ];

        try {
            // Fetch email from SiteInfo where key_word = 'email'
            $siteInfo = SiteInfo::where('key_word', 'email')->first();
            $toEmail = $siteInfo ? $siteInfo->text : 'test@test.ge';
            
            Mail::to($toEmail)->send(new GestMessageMail($data));
            
            // Send confirmation email to the user
            $this->sendConfirmationEmail($request->email);
            
            return Redirect::back()->with('success', 'Thank you for message! We will contact you shortly.');
        } catch (\Exception $e) {
            // Log the actual error for debugging
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return Redirect::back()->withErrors(['mail' => 'Mail sending failed. Please try again later.']);
        }
    }
    
    /**
     * Send confirmation email to user
     */
    private function sendConfirmationEmail($email)
    {
        Mail::to($email)->send(new class extends \Illuminate\Mail\Mailable {
            public function build()
            {
                return $this->subject('Thank you for contacting ' . config('app.name'))
                            ->markdown('mail.ConfirmationMail');
            }
        });
    }
}
