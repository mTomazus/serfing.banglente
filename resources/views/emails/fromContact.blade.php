<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form Message</title>
</head>
<body>
    <div style="background: #dab974;">
        <h1 style="padding-top:2rem;text-align:center;">New email has arrived</h1>
        <h2 style="text-align:center;padding-bottom:2rem">from {{ $sendername }}</h2>
        <div style="text-align:center;padding-bottom:2rem">
            <pre>{{ $sendermessage }}</pre>
        </div>
    </div>
</body>
</html>