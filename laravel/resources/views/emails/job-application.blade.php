<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 30px auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .header { background: #005BAA; padding: 28px 32px; }
        .header h1 { color: #ffffff; margin: 0; font-size: 20px; font-weight: 700; }
        .header p { color: rgba(255,255,255,0.7); margin: 4px 0 0; font-size: 13px; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #888; margin-bottom: 4px; }
        .value { font-size: 15px; color: #222; line-height: 1.5; }
        .position-badge { display: inline-block; background: #e8f0fb; color: #005BAA; font-size: 13px; font-weight: 700; padding: 6px 14px; border-radius: 20px; }
        .message-box { background: #f8f8f8; border-left: 4px solid #005BAA; border-radius: 4px; padding: 14px 16px; font-size: 14px; color: #333; line-height: 1.7; white-space: pre-wrap; }
        .footer { border-top: 1px solid #eeeeee; padding: 20px 32px; font-size: 12px; color: #aaa; text-align: center; }
        a { color: #005BAA; }
        hr { border: none; border-top: 1px solid #eeeeee; margin: 24px 0; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h1>New Job Application</h1>
        <p>BluBoxx Communication Pvt Ltd — bbcpl.in/jobs</p>
    </div>
    <div class="body">

        <div class="field">
            <div class="label">Position Applied For</div>
            <div class="value"><span class="position-badge">{{ $position }}</span></div>
        </div>

        <hr>

        <div class="field">
            <div class="label">Applicant Name</div>
            <div class="value">{{ $applicantName }}</div>
        </div>

        <div class="field">
            <div class="label">Email</div>
            <div class="value"><a href="mailto:{{ $applicantEmail }}">{{ $applicantEmail }}</a></div>
        </div>

        <div class="field">
            <div class="label">Phone</div>
            <div class="value">{{ $phone }}</div>
        </div>

        @if($coverLetter)
        <hr>
        <div class="field">
            <div class="label">Cover Letter</div>
            <div class="message-box">{{ $coverLetter }}</div>
        </div>
        @endif

    </div>
    <div class="footer">
        CV / Resume is attached to this email.<br>
        Reply directly to this email to respond to {{ $applicantName }}.<br><br>
        <strong>BluBoxx Communication Pvt Ltd</strong> · HR: backoffice@bbcpl.in
    </div>
</div>
</body>
</html>
