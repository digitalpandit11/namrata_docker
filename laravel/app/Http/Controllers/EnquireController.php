<?php

namespace App\Http\Controllers;

use App\Mail\EnquireFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquireController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'enquire_name'         => ['required', 'string', 'max:100', 'regex:/^[\pL\s\'\-]+$/u'],
            'enquire_phone'        => 'required|digits:10',
            'enquire_email'        => 'nullable|email|max:100',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Mail::to('backoffice@bbcpl.in')
            ->cc(['sales@bbcpl.in', 'support@vbtek.in', 'atul@vbtek.in', 'support@bbcpl.in'])
            ->send(new EnquireFormMail(
                name:     (string) $request->enquire_name,
                phone:    (string) $request->enquire_phone,
                email:    (string) ($request->input('enquire_email') ?? ''),
                pageUrl:  (string) ($request->headers->get('referer') ?? url('/')),
            ));

        return redirect('/thank-you');
    }
}
