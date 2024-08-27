@extends('layouts.app')

@section('content')

<main class="section content nuoma bg-grad">
    <div class="title">
        <h1>NUOMA</h1>         
        <h2>Didžiausias pasirinkimas!</h2>
    </div>
    <div class="lg">
        <div class="lg__info">
            <div class="content-box dark-text">
                <div class="d-flex">
                    <div class="d-grid">
                        <h3>BANGLENTĖ</h3>
                        <h4>nuo 15€ - dvi valandos</h4>
                        <p class="text-dark font-weight-normal">Mes visada jums padėsime išsirinkti tinkamą banglentę, patarsime kur plaukti. Ne vienerius metus daugelyje pasaulio vietų skrieje banga patarsime ir kitais klausimais. Nesidrovėkite klausti.</h4>
                    </div>
                    <img src="/img/bangle-sm.jpg" alt="banglentes surfboards">
                </div>
                <div class="d-flex">
                    <img src="/img/sup-sm.jpg" alt="irklentes standup paddle">
                    <div class="d-grid">
                        <h3>IRKLENTĖ</h3>
                        <h4>15€ - valanda</h4>
                        <p class="text-dark font-weight-normal">Kietos įvairaus dydžio irklentės puikiausiai tinka pasiplaukioti jūroje. Gera viso kūno treniruotė su irklente idealiai tiks bet kokioo amžiaus sportuojančiam.</h4>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-grid">
                        <h3>HIDROKOSTIUMAS</h3>
                        <h4>10€ - dvi valandos</h4>
                        <p class="text-dark font-weight-normal">Įvairių dydžių, šilti 5/4 mm. vyriški, moteriški ir vaikiški hidrokostiumų nuoma. Vandens temparatūrai pasiekus bent 13 laipsnių su 5mm. hidrokostiumu, batais ir kapišonu visiškai nešalta</h4>
                    </div>
                    <img src="/img/hidro-sm.jpg" alt="hidrokostiumai wetsuits">
                </div>
                <div class="d-flex">
                    <img src="/img/skate-sm.jpg" alt="riedlentes skateboards">
                    <div class="d-grid">
                        <h3>RIEDLENTĖ</h3>
                        <h4>15€ - dvi valandos</h4>
                        <p class="text-dark font-weight-normal">Surf skeitai - puiki pramoga ir labai gera banglenčių treniruočių priemonė. Turime visų populiariausių brandų surf riedlentes - Carver, SmoothStar ir Miller. Būtinai išmėginkite!</h4>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-grid">
                        <h3>SKIM BOARDAS</h3>
                        <h4>10€ - dvi valandos</h4>
                        <p class="text-dark font-weight-normal">Mažesnė nei banglentė, neturi pelekų ir skirta čiuožti negiliu vandeniu. Viskas prasideda paplūdimyje, metant lntą ant vandens :)</h4>
                    </div>
                    <img src="/img/skim-sm.jpg" alt="skimboards">
                </div>
                <div class="d-flex">
                    <img src="/img/body-sm.jpg" alt="puslentės bodyboard">
                    <div class="d-grid">
                        <h3>PUSLENTĖ</h3>
                        <h4>10€ - dvi valandos</h4>
                        <p class="text-dark font-weight-light">Puiki priemone suprasti bangų gaudymo mechaniką ir čiuožimo nuo bangos dinamiką.</h4>
                    </div>
                </div>
            </div>
            <div class="content-side">
                <h2>PROGNOZĖ</h2>
                <iframe width="100%" height="262" src="https://embed.windy.com/embed2.html?lat=55.479&amp;lon=20.742&amp;zoom=5&amp;level=surface&amp;overlay=wind&amp;menu=&amp;message=true&amp;marker=&amp;calendar=now&amp;pressure=true&amp;type=map&amp;location=coordinates&amp;detail=&amp;detailLat=55.282&amp;detailLon=13.590&amp;metricWind=m%2Fs&amp;metricTemp=%C2%B0C&amp;radarRange=-1" frameborder="0"></iframe>
                <h2>TEMPERATŪRA</h2>
                <iframe width="300" height="218" src="https://weather-stats.com/i/9qa7d/current/1458/4" style="display:block; margin:1rem auto; border: 0px; outline: 0px; display: inline-block;"></iframe>
                <h2>WEB KAMERA</h2>
                <iframe width="100%" height="300" src="https://www.delfi.lt/video/transliacijos/24-7/stream.php?hls=https://s1.dcdn.lt/livecam/kl011.stream/playlist.m3u8&amp;autoplay=true" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" autoplay="true"></iframe>
            </div>
        </div>
    </div>

    <!--------- Carousel --------->
    <div class="carousel banglentes sm">
        <button class="b-left is-hidden">
            <img src="/img/left-solid.svg" alt="banglentes - left">
        </button>
        <div class="track-container">
            <ul class="carousel-track">
                <li class="carousel-slide current-slide">
                    <h3>BANGLENTĖS</h3>
                    <img src="/img/lenta-9.jpg" alt="banglentes nuoma">
                    <div class="info">
                        <h4>pradedantiesiems</h4>
                        <h4>15 eur - 2 val.</h4>
                        <h4>25 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide current-slide">
                    <h3>HIDROKOSTIUMAI</h3>
                    <img src="/img/wetsuit-1.jpg" alt="hidrokostiumai vyriski moteriski">
                    <div class="info">
                        <h4>stori - 5/4 mm.</h4>
                        <h4>10 eur - 2 val.</h4>
                        <h4>20 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>IRKLENTĖS</h3>
                    <img src="/img/sup-1.jpg" alt="irklentes - sup'ai">
                    <div class="info">
                        <h4>kietos nuo 10"</h4>
                        <h4>15 eur - 1 val.</h4>
                        <h4>40 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>RIEDLENTĖS</h3>
                    <img src="/img/skate-1.jpg" alt="surfskate - riedlentes">
                    <div class="info">
                        <h4>Carver ir Miller</h4>
                        <h4>10 eur - 1 val.</h4>
                        <h4>20 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>BODYBOARDAS</h3>
                    <img src="/img/bodyboard-1.jpg" alt="bodyboard - puslentė">
                    <div class="info">
                        <h4>Be peliakų</h4>
                        <h4>10 eur - 2 val.</h4>
                        <h4>20 eur - pusdienis</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>SKIMBOARDAS</h3>
                    <img src="/img/skimboard-1.jpg" alt="skimboardas">
                    <div class="info">
                        <h4>Fanierinė</h4>
                        <h4>10 eur - 2 val.</h4>
                        <h4>20 eur - pusdienis</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>BANGLENTĖ</h3>
                    <img src="/img/lenta-6.jpg" alt="">
                    <div class="info">
                        <h4>Pažengusiems</h4>
                        <h4>20 eur - 2 val.</h4>
                        <h4>35 eur - diena</h4>
                    </div>
                </li>
            </ul>
        </div>
        <button class="b-right">
            <img src="/img/right-solid.svg" alt="irklentes - right">
        </button>
    </div> <!----- END Carousel END ----->
</div> 
@endsection

@section('meta')
    
    <title>Banglentė - banglenčių nuoma, irklenčių nuoma ir hidrokostiumų nuoma</title>
    <link rel="canonical" href="https://www.banglente.com/nuoma/">
    <meta name="description" content="Banglenčių nuoma, surf rent, rent, irklenčių nuoma ir riedlentės">
    <meta name="keywords" content="banglenčių nuoma, irklenčių nuoma, bodyboardai, surfboard rental, hidrokostiumų nuoma, wetsuits rental, rent surf, hidrokostiumai, riedlentės, nuoma, klaipeda, surfer">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>

@endsection