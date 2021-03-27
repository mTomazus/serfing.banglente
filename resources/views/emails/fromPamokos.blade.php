<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pamokos Registracija</title>
</head>
<body style="background: #7ac570;">
    
    <div style="text-align: center;width: 320px;margin:auto;padding:.5rem;">
        <h1>Pamokos Registracija</h1>
        <h2>from {{ $sendername }}</h2>
    </div> 
    <br>
    <div>
        <pre>
            <table style="margin:auto;width:100%;text-align:left;">
                <tr>
                <th>Paslauga</th>
                <th>Vardas</th>
                <th>Data</th>
                <th>Telefonas</th>
                <th>El.Paštas</th>
                </tr>
                <tr>
                <td>{{ $senderpaslauga }}</td>
                <td>{{ $sendername }}</td>
                <td>{{ $senderdate }}</td>
                <td>{{ $senderphone }}</td>
                <td>{{ $senderemail }}</td>
                </tr>
            </table>
        </pre>
    </div>
</body>
</html>