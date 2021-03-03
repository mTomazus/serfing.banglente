@extends('layouts.app')

@section('content')

    <div id="fullpage"> <!--- FULLPAGE START --->

        <!--------------------------------->
        <!----- Sekcija nr1 LANDING I ----->
        <!--------------------------------->  

        <div class="s1 section"> 
            <div class="content landing__first">
                <div class="heading">
                    <h1>LAIKAS IŠMOKTI SERFINTI</h1>
                </div>
                <button>REGISTUOKIS</button>
                <div class="stars">
                    <p>Numeris 1 Lietuvoje</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"/></svg>
                </div>
            </div>
        </div>   <!--- end SECTION 1  --->

        <!------------------------------------>
        <!------ Sekcija nr2 LANDING II ------>
        <!------------------------------------>

        <div class="s2 section">
            <div class="landing__second content">
                <div class="heading">
                    <h1>PAMOKOS</h1>
                    <h1 class="small">NUOMA</h1>
                    <h2>ČIA TIK VISKO PRADŽIA</h2>
                </div>
                <div class="circle_svg">
                    <img src="/img/circle.svg" height="200" width="200" fill="white" alt="">
                </div>
                <div class="s3-apacia">
                    <h2>DIDELIS LENTŲ PASIRINKIMAS</h3>
                    <h2>BANGLENTĖS - RIEDLENTĖS</h2>
                    <h2>IRKLENTĖS - HIDROKOSTIUMAI</h2>
                </div>
            </div>
        </div>    <!--- end Sekcija 2  --->
        
        <!------------------------------------->
        <!------ Sekcija nr3 LANDING III ------>
        <!------------------------------------->

        <div class="s3 section">
            <div class="landing__third content">
                <div class="heading">
                    <h1>VASAROS DIENOS STOVYKLA</h1>
                    <h2>PENKIOS DIENOS TRENIRUOČIŲ</h2>
                    <h2>GRYNAS ORAS IR JŪRA</h2>
                </div>
                <button>SPAUSK ČIA</button>                      
                <div class="s3-apacia">
                    <h2 class="small">RUDENIOP</h2>
                    <h1>BANGLENČIŲ</h1>
                    <h2>SPORTO BŪRELIS</h2>
                </div>
            </div>     
        </div>    <!--- end Sekcija 3  --->
        
    </div>    <!--- end FULLPAGE --->

@endsection
