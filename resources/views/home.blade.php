@extends('layouts.app')

@section('content')

    <main class="one-page">
        <div class="s3 section">
            <div class="py-4">
                <h2 class="blink">REGISTRACIJA ATIDARYTA</h2>
            </div>
            <div class="heading py-3">
                <h1>BANGLENČIŲ SPORTO VAIKŲ STOVYKLA</h1>
            </div>
            <div class="py-2">
                <button class="btn"><a href="/stovykla/">REGISRUOKIS</a></button>                
            </div>  
        </div>
    </main>
    <style>
        h2 {
            font-size: 2rem!important;
        }
    </style>

@endsection

@section('meta')

    <title>Banglentė - mokomes čiužti banglente Lietuvoje</title>
    <link rel="canonical" href="https://www.banglente.com/">
    <meta name="description" content="Griebiam banglentes ir į bangas, išsinuomuok banglente , SUPą Klaipėdoje ir Melnragėje, banglenčių mokykla.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, surf nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')
    
    <script type="text/javascript" src="/js/topnav.js"></script>

@endsection