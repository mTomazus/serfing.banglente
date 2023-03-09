@extends('layouts.app')

@section('content')

<main class="content section bg-grad"">
    <h1 class="my-3">VARŽYBOS</h1>
    <div class="container-md">

        <div class="content-side w-100 d-none d-sm-grid m-0" style="grid-template-columns: 1fr 1fr 1fr;gap:1rem;">
            <div>
                <h2>ARTIMIAUSIOS</h2>
                <div class="bg-white mb-4">
                    <img class="w-100 m-0" src="/img/2022-cover.jpg" alt="posteris varžybų">
                </div>
            </div>
            <div>
                <h2>REMĖJAI</h2>
                <div class="bg-white mb-4 d-flex">
                    <img class="p-3 my-0 w-50 shadow-none" src="/img/oneill.svg" alt="">                
                    <img class="p-3 my-0 w-50 shadow-none" src="/img/kl.jpeg" alt="">
                </div>
            </div>
            <div>
                <h2>VIETA</h2>
                <div class="bg-grad mb-4 p-2">
                    <h3>Spotas "Molas"</h3>
                    <h3>Klaipėda - Melnragė</h3>
                    <h3>55°43'50.1"N 21°04'59.8"E</h3>
                </div>
            </div>
        </div>

        <div class="d-sm-grid d-block" style="gap:1rem;grid-template-columns:repeat(2, 1fr)">
            <div class="bg-white d-grid p-3">
                <div>
                    <img class="w-100 mb-3 d-sm-block d-none" src="/img/2022-cover.jpg" alt="posteris varžybų">
                    <h3 class="text-dark">Molas Surf Youth Competition 2023</h1>
                    <h3 class="text-dark">Liepa</h3>
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
                        <h5 class="text-dark">Nuostatai</h5>
                    </a>
                    <a class="flex col-2" href="/incoming/Tinklelis2022.pdf" target="_blank">
                        <img class="w-50 float-none m-0" src="/img/pdf.png" alt="pdfas">
                        <h5 class="text-dark">Tinklelis</h5>
                    </a>
                    <a class="flex col-2" href="#" >
                        <img class="w-50 float-none m-0" src="/img/pdf.png" alt="pdfas">
                        <h5 class="text-dark">Info</h5>
                    </a>
                </div>
            </div>
            <div class="bg-white d-grid p-3">
                <div>
                    <h3 class="text-dark">Molas Surf Longboard Classic 2023</h1>
                    <h3 class="text-dark">Rugpjūtis</h3>
                </div>
                <div class="ms-4">
                    <ul class="text-dark">
                        <li>Pogrupiai: vyrai ir moterys;</li>
                        <li>Mažiausiai 10 dalyviai pogrupyje;</li>
                        <li>Max 12 dalyvių pogrupyje</li>
                        <li>Vertinimo kriterijai:
                            <ul class="text-dark">
                                <li>Klasikiniai longboardų manevrai;</li>
                                <li>Kritinėje bangos dalyje;</li>
                                <li></li>
                            </ul>
                        </li>
                        <li>Min 9 pėdų lentos</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    
</div>

@endsection

@section('meta')

    <title>Banglentė - banglenčiųvaržybos Lietuvoje</title>
    <link rel="canonical" href="https://www.banglente.com/varzybos/">
    <meta name="description" content="Banglenčių sporto varžybos jau nuo 2016, kiekvienais metai organizuojame tradicinį Klaipėdos renginį">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection