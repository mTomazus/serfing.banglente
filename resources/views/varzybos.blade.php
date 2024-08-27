@extends('layouts.app')

@section('content')

<main class="content section bg-grad"">
    <h1 class="my-3">VARŽYBOS</h1>
    <div class="container-md m-auto w-100 content-side">

        <div class="d-lg-grid d-flex" style="grid-template-columns: 2fr 1fr; gap:1rem; flex-direction:column">
            <div class="remejai">
                <h2>REMĖJAI</h2>
                <div class="bg-white mb-4 d-grid" style="grid-template-columns: 1fr 1fr; gap:1rem;">
                    <img class="my-0 shadow-none" style="max-width:100%" src="/img/decathlon.svg" alt="decathlon logo">
                    <img class="my-0 shadow-none" style="max-width:100%" src="/img/evadenta.png" alt="evadenta logo">
                    <img class="my-0 shadow-none" style="max-width:100%" src="/img/oneill-logo.jpg" alt="oneill logo">                
                    <img class="my-0 shadow-none" style="max-width:100%" src="/img/klaipeda.diena.png" alt="klaipeda logo">
                </div>
            </div>

            <div class="registracija">
                <h2>REGISTRACIJA</h2>
                <div class="bg-white">
                    @livewire('varzybu-form')
                </div>
            </div>

            <div class="mb-3 skelbimas" style="gap:1rem;grid-template-columns:repeat(2, 1fr)">
                <h2>ARTIMIAUSIOS</h2>
                <div class="bg-white d-grid p-3">
                    <div>
                        <img class="w-100 mb-3 d-block" src="/img/2024-cover.jpg" alt="posteris varžybų">
                        <h3 class="text-dark">Molas Junior Surf Competition 2024</h1>
                        <h3 class="text-dark">2024 m. Liepa</h3>
                    </div>
                    <div class="ms-4">
                        <ul class="text-dark">
                            <li>Pogrupiai:
                                <ul class="text-dark">
                                    <li>U-14 - iki 14 metų (vaikinai / merginos);</li>
                                    <li>U-16 - iki 16 metų (vaikinai / merginos);</li>
                                    <li>U-18 - iki 18 metų (vaikinai / merginos).</li>
                                </ul>
                            </li>
                            <li>Mažiausiai 6 dalyviai pogrupyje,</li>
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
                            <img class="w-50 float-none m-0" style="box-shadow:none" src="/img/pdf.png" alt="pdfas">
                            <h5 class="text-dark">Nuostatai</h5>
                        </a>
                        <a class="flex col-2" href="/public/2024-tinklelis.pdf" target="_blank">
                            <img class="w-50 float-none m-0" style="box-shadow:none" src="/img/pdf.png" alt="pdfas">
                            <h5 class="text-dark">Tinklelis</h5>
                        </a>
                        <a class="flex col-2" href="/public/2024-junior.pdf" >
                            <img class="w-50 float-none m-0" style="box-shadow:none" src="/img/pdf.png" alt="pdfas">
                            <h5 class="text-dark">Info(en)</h5>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="dalyviai">
                <h2>DALYVIAI</h2>
                <div class="bg-white">
                    @livewire('varzybu-table')
                </div>
            </div>
            
 

        </div>

    </div>
    
</div>

<style>
.content-side h2 {
    background-image: linear-gradient(to right, #2f78a8, #114161);
    min-width: 100%;
}
</style>

@endsection

@section('meta')

    <title>Banglenčių varžybos Lietuvoje</title>
    <link rel="canonical" href="https://www.banglente.com/varzybos/">
    <meta name="description" content="Banglenčių sporto varžybos jau nuo 2016, kiekvienais metai organizuojame tradicinį Klaipėdos renginį">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection