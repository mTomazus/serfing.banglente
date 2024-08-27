<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Varžybų Registracija</title>
    <style>
        li {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body style="background-color:#fdfd8c8c">
    
    <div style="background: #4ac4e2;text-align:center;width:100%;margin:auto;padding:.5rem;">
        <h1>Varžybų Registracija</h1>
        <h2>VšĮ Banglentė</h2>
        <h3>+370 686 02356 </h3>
    </div> 
    <div style="margin:3rem">
        <h3>Laba diena,</h3>
        <h3>Gavome Varžybų registracijos į Molas Junior Surf 2024 {{ $senderdivision }} pogrupį.</h3>
        <br>
        <h3>Varžybų startinis mokestis 20 Eur., kurį galėsite sumokėti vietoje grynais.</h3>
        <h3>Patikrinkite ar teisingai suvedėte duomenis į formą.</h3>
        <pre>
            <div style="margin:auto;width:100%;text-align:left;border: 2px solid grey;padding: 0.5rem;">
                <ul>
                    <li>Pogrupis: {{ $senderdivision }}</li>
                    <li>Vardas Pavardė: {{ $sendername }} {{ $sendersurname }}</li>
                    <li>Telefonas: {{ $senderphone }}</li>
                    <li>El.Paštas: {{ $senderemail }}</li>
                </ul>
            </div>
        </pre>

        <h3>Pagarbiai,</h3>
        <h3>Org. komiteto pirmininkas</h3>
        <h3 style="margin-bottom:2rem">Tomas Ūksas</h3>
    </div>
</body>
</html>