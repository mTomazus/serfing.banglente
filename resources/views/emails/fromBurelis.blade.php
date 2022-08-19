<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Būrelio Registracija</title>
</head>
<body>
    
    <div style="background: #4ac4e2;text-align: center;width: 320px;margin:auto;padding:.5rem;">
        <h1>Būrelio Registracija</h1>
        <h2>from {{ $sendername }} {{ $sendersurname }}</h2>
    </div> 
    <br>
    <div>
        <pre>
            <table style="margin:auto;width:100%;text-align:left;border: 2px solid grey;padding: 0.5rem;">
                <tr style="background: khaki;">
                    <th>Vardas Pavardė</th>
                    <th>Metai</th>
                    <th>Telefonas</th>
                    <th>El.Paštas</th>
                </tr>
                <tr>
                    <td>{{ $sendername }} {{ $sendersurname }}</td>
                    <td>{{ $senderage }}</td>
                    <td>{{ $senderphone }}</td>
                    <td>{{ $senderemail }}</td>
                </tr>
            </table>
        </pre>
    </div>
</body>
</html>