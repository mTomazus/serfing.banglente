@extends('layouts.app')

@section('content')

<div class="section content nuoma bg-grad">
    <h1>NUOMA</h1>         
    <h2>Didžiausias pasirinkimas!</h2>

    <div class="lg">
        <div class="lg__info">
            <div class="content-box">
                <div>
                    <img src="./img/bangle-sm.jpg" alt="banglentes surfboards">
                    <h3>BANGLENTĖ</h3>
                    <h4>nuo 10€ - dvi valandos</h4>
                    <h4>Mes visada jums padėsime išsirinkti tinkamą banglentę, patarsime kur plaukti. Ne vienerius metus daugelyje pasaulio vietų skrieje banga patarsime ir kitais klausimais. Nesidrovėkite klausti.</h4>
                </div>
                <div>
                    <img src="./img/sup-sm.jpg" alt="irklentes standup paddle">
                    <h3>IRKLENTĖ</h3>
                    <h4>10€ - valanda</h4>
                    <h4>Kietos įvairaus dydžio irklentės puikiausiai tinka pasiplaukioti jūroje. Gera viso kūno treniruotė su irklente idealiai tiks bet kokioo amžiaus sportuojančiam.</h4>
                </div>
                <div>
                    <img src="./img/hidro-sm.jpg" alt="hidrokostiumai wetsuits">
                    <h3>HIDROKOSTIUMAS</h3>
                    <h4>5€ - dvi valandos</h4>
                    <h4>Įvairių dydžių, šilti 5/4 mm. vyriški, moteriški ir vaikiški hidrokostiumų nuoma. Vandens temparatūrai pasiekus bent 13 laipsnių su 5mm. hidrokostiumu, batais ir kapišonu visiškai nešalta</h4>
                </div>
                <div>
                    <img src="./img/skate-sm.jpg" alt="riedlentes skateboards">
                    <h3>RIEDLENTĖ</h3>
                    <h4>10€ - dvi valandos</h4>
                    <h4>Surf skeitai - puiki pramoga ir labai gera banglenčių treniruočių priemonė. Turime visų populiariausių brandų surf riedlentes - Carver, SmoothStar ir Miller. Būtinai išmėginkite!</h4>
                </div>
                <div>
                    <img src="./img/skim-sm.jpg" alt="skimboards">
                    <h3>SKIM BOARDAS</h3>
                    <h4>10€ - dvi valandos</h4>
                    <h4>Mažesnė nei banglentė, neturi pelekų ir skirta čiuožti negiliu vandeniu. Viskas prasideda paplūdimyje, metant lntą ant vandens :)</h4>
                </div>
                <div>
                    <img src="./img/body-sm.jpg" alt="puslentės bodyboard">
                    <h3>PUSLENTĖ</h3>
                    <h4>10€ - dvi valandos</h4>
                    <h4>Puiki priemone suprasti bangų gaudymo mechaniką ir čiuožimo nuo bangos dinamiką.</h4>
                </div>
            </div>
            <div class="content-side">
                <h2>PROGNOZĖ</h2>
                <iframe width="100%" height="262" src="https://embed.windy.com/embed2.html?lat=55.479&amp;lon=20.742&amp;zoom=5&amp;level=surface&amp;overlay=wind&amp;menu=&amp;message=true&amp;marker=&amp;calendar=now&amp;pressure=true&amp;type=map&amp;location=coordinates&amp;detail=&amp;detailLat=55.282&amp;detailLon=13.590&amp;metricWind=m%2Fs&amp;metricTemp=%C2%B0C&amp;radarRange=-1" frameborder="0"></iframe>
                <h2>WEB KAMERA</h2>
                <iframe width="100%" height="300" src="http://www.delfi.lt/video/transliacijos/24-7/stream.php?hls=https://s1.dcdn.lt/livecam/kl011.stream/playlist.m3u8&amp;autoplay=true" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" autoplay="true"></iframe>
            </div>
        </div>
    </div>

    <!--------- Carousel --------->
    <div class="carousel banglentes sm">
        <button class="b-left is-hidden">
            <img src="./img/left-solid.svg" alt="banglentes - left">
        </button>
        <div class="track-container">
            <ul class="carousel-track">
                <li class="carousel-slide current-slide">
                    <h3>BANGLENTĖS</h3>
                    <img src="./img/lenta-9.jpg" alt="banglentes nuoma">
                    <div class="info">
                        <h4>pradedantiesiems</h4>
                        <h4>10 eur - 2 val.</h4>
                        <h4>20 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide current-slide">
                    <h3>HIDROKOSTIUMAI</h3>
                    <img src="./img/lenta-1.jpg" alt="hidrokostiumai vyriski moteriski">
                    <div class="info">
                        <h4>stori - 5/4 mm.</h4>
                        <h4>5 eur - 2 val.</h4>
                        <h4>10 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>IRKLENTĖS</h3>
                    <img src="./img/lenta-2.jpg" alt="irklentes - sup'ai">
                    <div class="info">
                        <h4>kietos nuo 10"</h4>
                        <h4>10 eur - 1 val.</h4>
                        <h4>40 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-3.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-4.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-5.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-6.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-7.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-8.jpg" alt="">
                </li>
            </ul>
        </div>
        <button class="b-right">
            <img src="./img/right-solid.svg" alt="irklentes - right">
        </button>
    </div> <!----- END Carousel END ----->
</div> 
@endsection