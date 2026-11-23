<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 30px auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .header { background: #09A9E3; padding: 28px 32px; }
        .header h1 { color: #ffffff; margin: 0; font-size: 20px; font-weight: 700; }
        .header p { color: rgba(255,255,255,0.7); margin: 4px 0 0; font-size: 13px; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #888; margin-bottom: 4px; }
        .value { font-size: 15px; color: #222; line-height: 1.5; }
        .footer { border-top: 1px solid #eeeeee; padding: 20px 32px; font-size: 12px; color: #aaa; text-align: center; }
        a { color: #09A9E3; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h1>New Enquiry Form Submission</h1>
        <p>Submitted via bbcpl.in</p>
    </div>
    <div class="body">

        <div class="field">
            <div class="label">Name</div>
            <div class="value">{{ $name }}</div>
        </div>

        <div class="field">
            <div class="label">Contact Number</div>
            <div class="value">{{ $phone }}</div>
        </div>

        @if($email)
        <div class="field">
            <div class="label">Email ID</div>
            <div class="value"><a href="mailto:{{ $email }}">{{ $email }}</a></div>
        </div>
        @endif

    </div>
    <div class="footer">
        This enquiry was submitted from the Enquire Now form at <a href="https://bbcpl.in">bbcpl.in</a>.<br>
        Page: <a href="{{ $pageUrl }}">{{ $pageUrl }}</a>
    </div>
</div>
</body>
</html>
