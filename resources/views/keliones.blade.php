@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- SECTION KELIONES -------->
<!---------------------------------->
<main class="stovykla section bg-grad">  
    <div class="title">
        <h1>VAROM SERFINTI</h1>
        <h2>Kelionės į Kanarus (Lanzarote)</h2>
    </div>
    <div class="container">
        <div class="lg__info">
            <div class="content-box">
                <section class="position-relative">
                    <img class="col-md-8 col-12 m-auto shadow" src="/img/san_juan.jpg" alt="lanzarote San Juan">
                    <img class="col-md-8 m-auto d-none d-md-block shadow-none" style="position: absolute;width: 150px;right: 54px;                            bottom: -24px;" src="/img/lanza-logo.png" alt="lanzarote logo">
                </section>
                <p>Nebūna per senų ar per jaunų išbandyti naujus dalykus. Serfinimas – ne išimtis. Šią žiemą VšĮ Banglentė siūlo Jums galimybę keliauti ir išbandyti save pasaulinio lygio bangose.
                Mokykitės ir išgyvenkite įsimintiną nuotykį žavingoje Kanarų saloje – Lanzarotėje. </p>
                
                <p>Mūsų instruktoriai yra sertifikuoti ISA (International Surfing Asociation) bei SLSGB (Surfing Life Saving GB) nariai ir turi ilgametę patirtį banglenčių sporte.
                Todėl nepriklausomai nuo Jūsų turimų įgūdžių suteiks daug vertingų žinių.</p>
                
                <p class="">Pasirinktas ilgametis partneris Lanzarotėje turi aukščiausią TripAdvisor pripažinimą – Certificate of Exellence 2017. 
                Kas garantuoja, kad kelionė į Kanarus atitiks didžiausius Jūsų lūkesčius.</p>
                
                <div class="row p-0 mx-3 bg-transparent justify-content-around shadow-none">
                    <div class="col-12 col-md-5 p-1 mx-3">
                        <img class="w-100 shadow" src="/img/famara_view.jpg" alt="lanzarote view famara">
                    </div>
                    <div class="col-12 col-md-5 p-1 mx-3">
                        <img class="w-100 shadow" src="/img/room_famara.jpg" alt="lanzarote room famara">
                    </div>
                </div>
                
                <p>Jaukus serfhous'as Famaroje ne tik puikiai tinka serferių poreikiams, bet ir gamtos mėgėjai įvertins čia tvyrančią atmosferą.
                    Gyvenimas mažiau nei 100 m nuo vandenyno! Čia yra tikrieji Europos Havajai.</p>
                                            
                <section class="flex-row">
                    <article class="col">
                        <p class="fs-6">Mes pasirūpinsime:</p>
                        <ul class="text-white fw-bold">
                            <li>Apgyvendinimo variantai;</li>
                            <li>5 valandos pamokų per dieną;</li>
                            <li>Pietūs ant kranto;</li>
                            <li>Visa reikalinga įranga;</li>
                            <li>Transportas į ir iš spoto;</li>
                            <li>Draudimu.</li>
                        </ul>
                    </article>
                    <article class="col">
                        <p class="fs-6">Papildomos opcijos:</p>
                        <ul class="text-white fw-bold">
                            <li>Gyvenima viloje;</li>
                            <li>Vienvietyje kambaryje;</li>
                            <li>Dvivietyje kambaryje;</li>
                            <li>Transportas iš oro uosto;</li>
                            <li>Maitinimas;</li>
                            <li>Papildomos pamokos.</li>
                        </ul>
                    </article>
                </section>

            </div>

        
            <div class="content-side d-none d-lg-block">
                                        
                <h2>KAINOS</h2>
                <div class="container column p-0" style="margin: 10px 0px;">
                    <iframe class="col-12" frameborder="0" width="560" height="315" scrolling="no" src="http://stream.maesbyte.com/live.php?i=cruze.stream&amp;img=http://enhd.es/img/22/22.jpg"></iframe>
                    <iframe class="col-12" frameborder="0" width="560" height="315" scrolling="no" src="https://g0.ipcamlive.com/player/player.php?alias=5bb1e2f9de73e"></iframe>
                </div>

                <h2>SKRYDŽIAI</h2>
                <section class="d-flex flex-row bg-white w-100 mb-4">
                    <a style="width:25%;margin:auto;box-shadow:none" href="https://www.ryanair.com/flights/gb/en/flights-to-lanzarote" target=”_blank”><img class="shadow-none m-auto" src="/img/ryanair_logo.png" alt="ryanair logo"></a>
                    <a style="width:25%;margin:auto;box-shadow:none" href="https://wizzair.com/en-gb/flights/lanzarote-(canary-islands)" target=”_blank”><img class="shadow-none m-auto" src="/img/wizz_logo.png" alt="wizzair logo"></a>
                    <a style="width:25%;margin:auto;box-shadow:none" href="https://www.easyjet.com/en/cheap-flights/spain/lanzarote" target=”_blank”><img class="shadow-none m-auto" src="/img/easyjet-logo.png" alt="easyjet logo"></a>
                </section>

                <h2>GALERIJA</h2>

                <!--------- Galerija Keliones Carousel --------->
                <div class="carousel mb-4">
                    <button class="b-left is-hidden">
                        <img src="/img/left-solid.svg">
                    </button>
                    <div class="track-container">
                        <ul class="carousel-track">
                            @foreach ($images as $image)
                                <li class="carousel-slide current-slide">
                                    <img src="{{ asset($image) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <button class="b-right">
                        <img src="/img/right-solid.svg">
                    </button>
                </div>
            </div>                
        </div>
    </div>
</main>

@endsection

@section('meta')

    <title>Banglentė - Keliaukim į Kanarus!</title>
    <link rel="canonical" href="https://www.banglente.com/keliones/">
    <meta name="description" content="Surf kelionės į Kanarų salas">
    <meta name="keywords" content="surf keliones, surf travel, banglenčių stovykla, surf camp">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    
@endsection