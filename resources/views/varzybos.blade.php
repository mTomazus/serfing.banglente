@extends('layouts.app')

@section('content')

<div class="content varzybos section bg-grad"">
    <h1>VARŽYBOS</h1>
    <div class="lg">
        <div class="lg__info">
            <div class="content-box">
                <div>
                    <h3>Molas Surf Longboard Classic 2021</h1>
                    <h4>Liepos 1 - Rugpjūčio 31</h4>
                    <div class="ms-4">
                        <h5>Du pogrupiai - vyrai ir moterys</h5>
                        <h5>Max 12 dalyvių pogrupyje</h5>
                        <h5>Klasikinis longboardų vertinimas</h5>
                        <h5>Min 9' lentos</h5>
                    </div>
                </div>
            </div>
            <div class="content-side">
                <h2>REMĖJAI</h2>
                <div class="bg-white mb-4">
                    <img src="/img/ateik.png" alt="">
                    <img src="/img/klaiped.png" alt="">
                    <img src="/img/oneill.svg" alt="">                
                    <img src="/img/kl.jpeg" alt="">
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
    <div class="sm">
        <div>
            <h3>Spotas "Molas"</h3>
            <h3>Klaipėda - Melnragė</h3>
            <h3>55°43'50.1"N 21°04'59.8"E</h3>
            <h3>Dvi grupės</h3>
            <h3>Max 12 dalyvių</h3>
            <h3>Vyrai ir moterys</h3>
            <h3>Min 9' lentos</h3>
        </div>
        <div class="remejai">
            <h2>REMĖJAI</h2>
            <section>
                <img src="/img/ateik.png" alt="">
                <img src="/img/oneill.png" alt="">
                <img src="/img/klaiped.png" alt="">
                <img src="/img/kl.jpeg" alt="">
            </section>
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Banglentė - mokomes serfinti Lietuvoje</title>
    <link rel="canonical" href="https://www.serfingas.lt/varzybos/">
    <meta name="description" content="Banglenčių sporto varžybos jau nuo 2016, kiekvienais metai organizuojame tradicinį Klaipėdos renginį">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    
@endsection