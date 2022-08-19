@extends('layouts.app')

@section('content')

<div class="content section bg-grad"">
    <h1 class="my-3">VARŽYBOS</h1>
    <div class="container-md">
        <div class="lg__info">
            <div class="content-box">
                <div class="d-flex mb-3 bg-white justify-content-between flex-column">
                    <div>
                        <img class="w-100 m-0 d-sm-block d-md-none" src="/img/2022-cover.jpg" alt="posteris varžybų">
                        <h3>Molas Surf Youth Competition 2022</h1>
                        <h3>Liepa</h3>
                    </div>
                    <div class="ms-4">
                        <ul class="text-dark">
                            <li>Pogrupiai:
                                <ul class="text-dark">
                                    <li>U-12 - iki 12 metų (vaikinai / merginos);</li>
                                    <li>U-15 - iki 15 metų (vaikinai / merginos);</li>
                                    <li>U-18 - iki 18 metų (vaikinai / merginos).</li>
                                </ul>
                            </li>
                            <li>Mažiausiai 4 dalyviai pogrupyje,</li>
                            <li>Vertinimo kriterijai:
                                <ul class="text-dark">
                                    <li>Radikalūs kontroliuojamai atlikti manevrai;</li>
                                    <li>Kritinėje bangos dalyje;</li>
                                    <li>Lužusios bangos atvejais:
                                        <ul class="text-dark">
                                            <li>Taisyklingas atsistojimas;</li>
                                            <li>Bandymas pakeisti kryptį.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                     </div>
                     <div class="d-flex justify-content-around text-center">
                        <a class="flex col-2" href="/incoming/Junior2022.pdf" target="_blank">
                            <img class="w-50 float-none m-0" src="/img/pdf.png" alt="pdfas">
                            <h5>Nuostatai</h5>
                        </a>
                        <a class="flex col-2" href="/incoming/Tinklelis2022.pdf" target="_blank">
                            <img class="w-50 float-none m-0" src="/img/pdf.png" alt="pdfas">
                            <h5>Tinklelis</h5>
                        </a>
                        <a class="flex col-2" href="#" >
                            <img class="w-50 float-none m-0" src="/img/pdf.png" alt="pdfas">
                            <h5>Info</h5>
                        </a>
                     </div>
                </div>
                <div class="d-flex bg-white justify-content-between flex-column">
                    <div>
                        <h3>Molas Surf Longboard Classic 2022</h1>
                        <h3>Rugpjūtis</h3>
                    </div>
                    <div class="ms-4">
                        <h5>Du pogrupiai - vyrai ir moterys</h5>
                        <h5>Max 12 dalyvių pogrupyje</h5>
                        <h5>Klasikinis longboardų vertinimas</h5>
                        <h5>Min 9' lentos</h5>
                    </div>
                </div>
            </div>
            <div class="content-side d-none d-sm-block">
                <h2>ARTIMIAUSIOS</h2>
                <div class="bg-white mb-4">
                    <img class="w-100 m-0" src="/img/2022-cover.jpg" alt="posteris varžybų">
                </div>
                <h2>REMĖJAI</h2>
                <div class="bg-white mb-4">
                    <img class="py-3 my-0 w-50 shadow-none" src="/img/oneill.svg" alt="">                
                    <img class="py-3 my-0 w-50 shadow-none" src="/img/kl.jpeg" alt="">
                </div>
                <h2>VIETA</h2>
                    <div class="bg-white mb-4 p-2">
                        <h3>Spotas "Molas"</h3>
                        <h3>Klaipėda - Melnragė</h3>
                        <h3>55°43'50.1"N 21°04'59.8"E</h3>
                    </div>
            </div>
        </div>

    </div>
    
</div>

@endsection

@section('meta')

    <title>Banglentė - mokomes serfinti Lietuvoje</title>
    <link rel="canonical" href="https://www.banglente.com/varzybos/">
    <meta name="description" content="Banglenčių sporto varžybos jau nuo 2016, kiekvienais metai organizuojame tradicinį Klaipėdos renginį">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection