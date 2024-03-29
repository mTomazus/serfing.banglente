@extends('layouts.app')

@section('content')

    <div id="fullpage"> <!--- FULLPAGE START --->

        <!------------------------------------->
        <!------ Sekcija nr3 LANDING III ------>
        <!------------------------------------->

        <div class="s3 section">
            <div class="landing__third cont">
                <div class="heading mb-3">
                    <h1>VASAROS DIENOS STOVYKLA</h1>
                    <h2>PENKIOS DIENOS TRENIRUOČIŲ</h2>
                    <h2>GRYNAS ORAS IR JŪRA</h2>
                </div>
                <a href="/stovykla/">
                    <button>REGISRUOKIS</button>                      
                </a>
                <div class="s3-apacia mt-3">
                    <h2>RUDENIOP</h2>
                    <h1>BANGLENČIŲ</h1>
                    <h2>SPORTO BŪRELIS</h2>
                </div>
            </div>     
        </div>    <!--- end Sekcija 3  --->

        <!------------------------------------>
        <!------ Sekcija nr2 LANDING II ------>
        <!------------------------------------>

        <div class="s2 section">
            <div class="landing__second cont">
                <div class="heading">
                    <h1>BANGLENTES IRKLENTES NUOMA</h1>
                    <h2 class="mb-3">DIDŽIAUSIAS PASIRINKIMAS PABALTYJE</h2>
                </div>
                <a href="/nuoma/">
                    <button>INFO ČIA</button>
                </a>
                <div class="mt-3 s3-apacia">
                    <h2>SURF INVENTORIUS RIEDLENTĖS</h2>
                    <h2>VYRIŠKI, MOTERIŠKI ir VAIKIŠKI HIDROKOSTIUMAI</h2>
                </div>
            </div>
        </div>    <!--- end Sekcija 2  --->
        
        <!--------------------------------->
        <!----- Sekcija nr1 LANDING I ----->
        <!--------------------------------->  

        <div class="s1 section"> 
            <div class="cont landing__first">
                <div class="heading">
                    <h1>LAIKAS IŠMOKTI SERFINTI</h1>
                    <h2 class="mb-3">Viskas tam paruošta mūsų mokykloje!</h2>
                </div>
                <a href="/pamokos/">
                    <button>REGISTUOKIS</button>
                </a>
                <div class="stars">
                    <h1>BANGLENČIŲ MOKYKLA</h1>
                    <p>Numeris 1 Lietuvoje</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                </div>
            </div>
        </div>   <!--- end SECTION 1  --->

    </div>    <!--- end FULLPAGE --->

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