<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form Message</title>
</head>
<body>
    <h1 style="background: #4ac4e2;width: 320px;text-align: center;margin: 1rem 0 0;padding-top: 1rem;"> New email has arrived</h1>
    <div style="background: #4ac4e2;text-align: center;width: 320px;padding: .5rem;box-sizing: border-box;">
        <h2>      from {{ $sendername }}</h2>
    </div> 
    <br>
    <div>
        <h3><pre>{{ $sendermessage }}</pre></h3>
    </div>
</body>
</html>