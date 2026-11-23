<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name'                 => ['required', 'string', 'max:100', 'regex:/^[\pL\s\'\-]+$/u'],
            'email'                => 'required|email|max:100',
            'phone'                => 'required|string|max:20',
            'position'             => 'required|string|max:150',
            'cover_letter'         => 'nullable|string|max:2000',
            'cv'                   => 'required|file|mimes:pdf,doc,docx|max:5120',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $cvFile         = $request->file('cv');
        $cvOriginalName = $cvFile->getClientOriginalName();
        $cvPath         = $cvFile->store('cvs');

        Mail::to('backoffice@bbcpl.in')->send(new JobApplicationMail(
            applicantName:  (string) $request->name,
            applicantEmail: (string) $request->email,
            phone:          (string) $request->phone,
            position:       (string) $request->position,
            coverLetter:    (string) ($request->input('cover_letter') ?? ''),
            cvPath:         $cvPath,
            cvOriginalName: $cvOriginalName,
        ));

        return redirect()->back()->with('success', 'Thank you! Your application has been submitted. We will get back to you shortly.');
    }
}
