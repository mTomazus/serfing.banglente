@extends('layouts.app')

@section('content')

    <main class="content section bg-grad parama">
        
        <h1 class="mx-auto my-0">PARAMA</h1>
        <h2 class="mx-auto mb-md-5">Skirkite savo sumokėto pajamų mokesčio dalį banglenčių sportui.</h2>
        
        <div class="container d-block d-md-flex">
            
            <div class="content-box">
                
                <h3>Norint skirti sumokėto pajamų mokesčio dalį pasirinktam paramos gavėjui, užpildytą prašymą
                    (forma FR0512, versija v4) <strong>šiemet iki liepos 1 d.</strong> reikia pateikti Valstybinei mokesčių
                    inspekcijai. Tai padaryti galima keliais būdais:</h3>
               
                <ul class="m-0 p-0">
                    <li><h3>Greičiausiai ir patogiausiai prašymą FR0512 galite pateikti elektroniniu būdu per <a href="https://deklaravimas.vmi.lt/lt/Pradinis_Prisijungimo_puslapis/Prisijungimasperisorinessistemas.aspx" target="_blank">Elektroninio deklaravimo sistemą (EDS)</a>.</h3></li>
                    <li><h3>Prisijungus prie sistemos, skiltyje „Deklaravimas“ pasirenkame „Pildyti formą“. Prašymą skirti paramą rasite „Dažniausiai pildomų formų“ sąraše:</h3><img class="w-100 p-md-5 pt-2" src="/img/vmi-5.jpg"></li>
                    <li><h3>Formos pildymo laukelyje spaudžiame gaublio ikoną, skirtą elektroniniam pildymui:</h3><img class="w-100 p-md-5 pt-2" src="/img/vmi-4.jpg"></li>
                    <li><h3>Pateikite prašymą dešiniajame kampe paspaudus „Pateikti deklaraciją“</h3><img class="w-100 px-md-5 pt-2 mb-md-4" src="/img/vmi-2.jpg"></li>
                </ul>
                    
            </div>

            <div class="content-side">
                
                <h2 class="shadow">Prisijungti prie EDS</h2>
               
                <div class="bg-white mb-4 shadow">
                    
                    <img class="mb-0 w-100" src="/img/vmi-1.jpg">
                    <h3 class="text-dark p-3"> galima per išorines sistemas (pvz.: e. bankininkystę), su e. parašu
                        ar su VMI priemonėmis:</h3>
                    
                </div>
                
                <h2 class="shadow">Užpildykite šiuos laukelius:</h2>
                
                <div class="shadow">
                    
                    <img class="w-100 mb-0" src="/img/vmi-3.jpg">
                    <table class="table m-0 table-hover">
                        <tbody class="bg-white">
                            <tr>
                                <th scope="row">1</th>
                                <td>Įrašykite savo asmens kodą</td>
                            </tr>
                            <tr>
                                <th scope="row">3V</th>
                                <td>Įrašykite savo vardą</td>
                            </tr>
                            <tr>
                                <th scope="row">3P</th>
                                <td>Įrašykite savo pavardę</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Pasirinkite už kurį mokestinį laikotarpį – <?php $year = date("Y"); $lastyear = $year -1; echo $lastyear; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">6S</th>
                                <td>Pažymėkite varnele</td>
                            </tr>
                            <tr>
                                <th scope="row">E1</th>
                                <td>Įveskite gavėjo tipą: 2 – paramos gavėjas</td>
                            </tr>
                            <tr>
                                <th scope="row">E2</th>
                                <td>Įveskite gavėjo  identifikacinį numerį – <strong class="h3">304105037</strong></td>
                            </tr>
                            <tr>
                                <th scope="row">E3</th>
                                <td>Nurodykite mokesčio dalies paskirtį</td>
                            </tr>
                            <tr>
                                <th scope="row">E4</th>
                                <td>Nurodykite skiriamos mokesčio dalies dydį (1.2% max)</td>
                            </tr>
                            <tr>
                                <th scope="row">E5</th>
                                <td>Nurodykite iki kokio mokestinio laikotarpio skiriate mokesčio dalį- pildoma tik norint pajamų mokesčio dalį skirti ilgiau kaip 1 metus - vėliausiai iki <?php $year = date("Y"); $nextyear = $year + 3; echo $nextyear; ?> m.</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <h2 class="my-4">Dėkojame už Jūsų paramą!</h2>

            </div>
        </div>
    </main>

@endsection

@section('meta')

    <title>Banglenčių mokykla - Paremkite 1.2% mūsų mokyklą</title>
    <link rel="canonical" href="https://www.serfingas.lt/parama/">
    <meta name="description" content="Prašome paremti VšĮ „Banglentė“ veiklą iki gegužės 1 d. skirdami mums 1,2% GPM paramą">
    <meta name="keywords" content="parama, darbas, banglentės, banglente, surf, job, vasaros darbas">

    <meta property="og:url" content="https://www.serfingas.lt.com/parama/">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://www.serfingas.lt/img/parama.jpg">
	<meta property="og:description" content="1,2% parama banglenčių sporto mokyklai. Prašome paremti VšĮ „Banglentė“ veiklą iki gegužės 1 d. skirdami mums 1.2% GPM paramą">
	<meta property="og:title" content="VšĮ Banglentė | 1.2% GPM parama Banglenčių sporto propagavimui.">

   @endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection