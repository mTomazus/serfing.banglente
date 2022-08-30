@extends('layouts.app')

@section('content')

    <div>
        <div class="s3 section">
            <div class="landing__third cont">
                <div style="background: #000000a8;padding: 1rem 2rem;">
                    <h2>NAUJIENA</h2>
                </div>
                <div class="heading mb-3">
                    <h1>BANGLENČIŲ SPORTO SEKCIJA</h1>
                </div>
                <a href="/burelis/">
                    <button>REGISRUOKIS</button>                      
                </a>
            </div>     
        </div>
    </div>

@endsection

@section('meta')

    <title>Banglentė - mokomes čiužti banglente Lietuvoje</title>
    <link rel="canonical" href="https://www.banglente.com/">
    <meta name="description" content="Griebiam banglentes ir į bangas, išsinuomuok banglente , SUPą Klaipėdoje ir Melnragėje, banglenčių mokykla.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, surf nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')
    
    <script type="text/javascript" src="/js/fullpage.js"></script>
    <script type="text/javascript" src="/js/topnav.js"></script>
    <script>
        fullpage('#fullpage', {
            autoScrolling: true,
            navigation: true,
            controlArrows: false,
            scrollBar: true,
            slidesNavigation: true,

        })
    </script>

@endsection