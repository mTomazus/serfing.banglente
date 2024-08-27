@extends('layouts.app')

@section('content')

<!--------------------------------->
<!-------- SECTION PAMOKOS -------->
<!--------------------------------->

<main class="stovykla bg-grad section">
    <div class="content pamokos">
        <div class="title">
            <h1>SURF PAMOKOS</h1>
            <h2>Išbandykite banglentes (angl. surfing)!</h2>
        </div>
        
            <div class="lg container-md">
                <div class="description">
                    <h2 class="mb-3">Puikiai išmanantys banglenčių sportą instruktoriai per pusantros valandos trūkmės pamoką pamokys, kaip pasigauti savo pirmą bangą. Mūsų surf pamokos vedamos trejeis lygiais:</h2>
                        <div class="row m-0">
                            <div class="col mr-3"><h2 class="mb-2 lygis">pirmas lygis</h2><h3 class="mb-2 text-dark">pradinis, išmoksite atsistoti ir išstovėti, saugumo bei etiketo taisykles vandenyje. Garantuojam daug gerų emocijų ir linksmai praleisto laiko</h3></div>
                            <div class="col mx-3"><h2 class="mb-2 lygis">antras lygis</h2><h3 class="mb-2 text-dark">sudėtingiau, išsiaiškinsime apie bangas ir kaip jos veikia. Mokysimes laiku pastebėti ir pagauti, bei pasukti banglentę frontsaidu ir backsaidu</h3></div>
                            <div class="col ml-3"><h2 class="mb-2 lygis">trečias lygis</h2><h3 class="mb-2 text-dark">nori jaustis puikiai lainupe. Orentuotis pozicionavime. Sunki ir sekinanti, bet tuo pačiu ir daug adrenalino suteikianti bus ši treniruotė</h3></div>
                        </div>
                </div>
                <div class="lg__info">
                    <div class="content-box lesson">
                        <div>
                            <h3>PAMOKŲ PAKETAS</h3>
                            <h4>150€</h4>
                            <p class="text-dark mt-3 mb-0 mx-2">Pakete dvi 1h trukmės pamokos, pirmoje pamokoje ramiame vandenyje išmokstam irklavimo, atsistojimo techniką ir balanso ant lentos. Antroje pamokoje jau bangose - pozicionavimą ir technikos tolimesnis įsisavinimas praktikoje.</p>
                        </div>
                        <div>
                            <h3>PRIVATI PAMOKA</h3>
                            <h4>85€</h4>
                            <p class="text-dark mt-3 mb-0 mx-2">Per šią pusantros valandos privačią serfingo pamoką pristatysime Jums etiketo, saugumo, serfingo pagrindus, irklavimo techniką, pozicionavimą bangose bei atsistojimo būdus.</p>
                        </div>
                        <div>
                            <h3>GRUPINĖ</h3>
                            <h4>40€</h4>
                            <p class="text-dark mt-3 mb-0 mx-2">Idealiai tinka pradedantiesiems ar tiems, kurie nori prisiminti pagrindus ir techniką. Pamoka kartu su mumis reiškia, kad mokotės iš geriausių, kad galėtumėte tapti geriausiais.</p>
                        </div>
                        <div>
                            <h3>PAMOKA DVIEM</h3>
                            <h4>120€</h4>
                            <p class="text-dark mt-3 mb-0 mx-2">Geriausiai tinka 2 asmenims - draugams ar draugėms, poroms ar artimiesiems. Čia mes pristatysime Jums saugumo ir serfingo pagrindus, irklavimo techniką bei atsistojimo būdus.</p>
                        </div>
                        <div>
                            <h3>KOMANDOS FORMAVIMAS</h3>
                            <h4>nuo 200€</h4>
                            <p class="text-dark mt-3 mb-0 mx-2">Subūrėte didelę grupę nuo 6 iki 12 žmonių, kuri norėtų išbandyti save bangose? Pabūti kartu, patirti geras emocijas bei palaikyti vienas kitą? Tai tinkamiausias pasirinkimas jums!</p>
                        </div>
                        <div>
                            <h3>INDIVIDUALI PLUS</h3>
                            <h4>100€</h4>
                            <p class="text-dark mt-3 mb-0 mx-2">Ši serfingo pamoka tinka tiek naujokams tiek pažengusiems ir su orientuocija į pastioviai daromas esmines klaidas ir kilstelėtų Jūsų techniką į naują lygį. Jei ieškote vertos pamokos - Jūs ją radote.</p>
                        </div>
                    </div>
                    <div class="content-side">
                        
                        <h2>GALERIJA</h2>
                        <div class="carousel">
                            <button class="b-left is-hidden">
                                <img src="/img/left-solid.svg" alt="left arrow">
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
                                <img src="/img/right-solid.svg" alt="right arrow">
                            </button>
                        </div>

                        <h2>DOVANŲ KUPONAS</h2>
                        <div class="kuponas description">    
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="opacity: 1; transform: translate(0px, 0px);float: right;"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="opacity: 1; transform: translate(0px, 0px);float: right;"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                            <h3>DOVANŲ KUPONAS</h3>
                            <h3>nuo 40€</h3>
                            <h3>Galioja metus, puiki dovana draugui ar kolegai. Galimi įvairus variantai, nuo grupinės pamokos iki individualios ar net kelių pamokų paketų.</h3>
                            <h3>Susisiekiate su mumis, aptariame sąlygas, padarote pavedimą į mūsų sąskaitą ir gaunate kuponą pdf arba atspauzdintą.</h3>
                        </div>
                        <h2>REGISTRACIJA</h2>

                        @livewire('pamokos-form')

                    </div>
                </div>
            </div>
            <div class="sm">
                <div class="description container mt-3">
                    <h2>Puikiai išmanantys banglenčių sportą instruktoriai per pusantros valandos trūkmės pamoką pamokys, kaip pasigauti savo pirmą bangą. Mūsų surf pamokos vedamos trejais lygiais:</h2>
                        <div class="column">
                            <div class="col"><h2 class="mb-2 lygis">pirmas lygis</h2><h2>pradinis, išmoksite atsistoti ir išstovėti, saugumo bei etiketo taisykles vandenyje. Garantuojam daug gerų emocijų ir linksmai praleisto laiko</h2></div>
                            <div class="col"><h2 class="mb-2 lygis">antras lygis</h2><h2>sudėtingiau, išsiaiškinsime apie bangas ir kaip jos veikia. Mokysimes laiku pastebėti ir pagauti, bei pasukti banglentę frontsaidu ir backsaidu</h2></div>
                            <div class="col"><h2 class="mb-2 lygis">trečias lygis</h2><h2>nori jaustis puikiai lainupe. Orentuotis pozicionavime. Sunki ir sekinanti, bet tuo pačiu ir daug adrenalino suteikianti bus ši treniruotė</h2></div>
                        </div>
                </div>
                <section class="akordionas mt-3">
                    <div class='accordion__container'>
                        <h3 class="position-absolute">150€</h3>
                        <h3 class="accordion__button accordion__button--active">PAMOKŲ PAKETAS</h3>
                        <div class="accordion__content">
                            <h4>Pakete dvi 1h trukmės pamokos, pirmoje pamokoje ramiame vandenyje išmokstam irklavimo, atsistojimo techniką, balanso ir . Antroje pozicionavimą bangose ir technikos tolimesnis įsisavinimas.</h4>
                        </div>
                    </div>
                    <div class="accordion__container">
                        <h3 class="position-absolute">85€</h3>
                        <h3 class="accordion__button">PRIVATI PAMOKA</h3>
                        <div class="accordion__content">
                            <h4>Per šią pusantros valandos privačią serfingo pamoką pristatysime Jums etiketo, saugumo, serfingo pagrindus, irklavimo techniką, pozicionavimą bangose bei atsistojimo būdus.</h4>
                        </div>
                    </div>
                    <div class="accordion__container">
                        <h3 class="position-absolute">40€</h3>
                        <h3 class="accordion__button">GRUPINĖ PAMOKA</h3>
                        <div class="accordion__content">
                            <h4>Idealiai tinka pradedantiesiems ar tiems, kurie nori prisiminti pagrindus ir techniką. Pamoka kartu su mumis reiškia, kad mokotės iš geriausių, kad galėtumėte tapti geriausiais.</h4>
                        </div>
                    </div>
                </section>
                <section class="akordionas sm">
                    <div class="accordion__container">
                        <h3 class="position-absolute">120€</h3>
                        <h3 class="accordion__button">PAMOKA DVIEMS</h3>
                        <div class="accordion__content">
                            <h4>Geriausiai tinka 2 asmenims - draugams ar draugėms, poroms ar artimiesiems. Čia mes pristatysime Jums saugumo ir serfingo pagrindus, irklavimo techniką bei atsistojimo būdus.</h4>
                        </div>
                    </div>
                    <div class="accordion__container">
                        <h3 class="position-absolute">~200€</h3>
                        <h3 class="accordion__button">KORPORATYVAS</h3>
                        <div class="accordion__content">
                            <h4>Subūrėte didelę grupę nuo 6 iki 12 žmonių, kuri norėtų išbandyti save bangose? Pabūti kartu, patirti geras emocijas bei palaikyti vienas kitą? Tai tinkamiausias pasirinkimas jums!</h4>
                        </div>
                        </div>
                    <div class="accordion__container">
                        <h3 class="position-absolute">100€</h3>
                        <h3 class="accordion__button">PAMOKA EXTRA</h3>
                        <div class="accordion__content">
                            <h4>Ši serfingo pamoka tinka tiek naujokams tiek pažengusiems ir su orientuocija į pastioviai daromas esmines klaidas ir kilstelėtų Jūsų techniką į naują lygį. Jei ieškote vertos pamokos - Jūs ją radote.</h4>
                        </div>
                    </div>
                </section>
                <div class="w-90 my-4 m-auto">
                    <div class="text-center w-100 py-2 m-auto bg-def">
                        <h4 class="mb-0 fw-bold">REGISTRUOKIS</h4>
                    </div>
                    @livewire('pamokos-form')
                </div>
            </div>
        
    </div>
</div>    <!--- end SECTION 2  --->

@endsection

@section('meta')

    <title>Banglentė - banglenčių pamokos, geriausia vieta išmokti čiuožti banglente</title>
    <link rel="canonical" href="https://www.banglente.com/pamokos/">
    <meta name="description" content="Banglenčių pamokos Klaipėdoje, griausia vieta mokytti plaukti banglente, geriausi instruktoriai ir geriausias inventorius.">
    <meta name="keywords" content="Banglenčių pamokos, surf lessons, surf, serfingas, atsistoti ant lentos, banglente, surfboard, pamokos, mokykla">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/accordion.js"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    
@endsection