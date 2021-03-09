@extends('layouts.app')

@section('content')

<div class="content nuoma bg-grad">
    <h1>NUOMA</h1>         
    <h2>Didžiausias pasirinkimas!</h2>

    <div class="lg">
        <div class="lg__info">
            <div class="content-box">
                <div>
                    <h3>BANGLENTĖ</h3>
                    <h4>10€ - dvi valandos</h4>
                    <h4>Pakete dvi 1h trukmės pamokos, pirmoje pamokoje ramiame vandenyje išmokstam irklavimo, atsistojimo techniką ir balanso ant lentos. Antroje pamokoje jau bangose - pozicionavimą ir technikos tolimesnis įsisavinimas praktikoje.</h4>
                </div>
                <div>
                    <h3>IRKLENTĖ</h3>
                    <h4>10€ - valanda</h4>
                    <h4>Per šią pusantros valandos privačią serfingo pamoką pristatysime Jums etiketo, saugumo, serfingo pagrindus, irklavimo techniką, pozicionavimą bangose bei atsistojimo būdus.</h4>
                </div>
                <div>
                    <h3>HIDROKOSTIUMAS</h3>
                    <h4>5€ - dvi valandos</h4>
                    <h4>Idealiai tinka pradedantiesiems ar tiems, kurie nori prisiminti pagrindus ir techniką. Pamoka kartu su mumis reiškia, kad mokotės iš geriausių, kad galėtumėte tapti geriausiais.</h4>
                </div>
                <div>
                    <h3>RIEDLENTĖ</h3>
                    <h4>10€ - dvi valandos</h4>
                    <h4>Geriausiai tinka 2 asmenims - draugams ar draugėms, poroms ar artimiesiems. Čia mes pristatysime Jums saugumo ir serfingo pagrindus, irklavimo techniką bei atsistojimo būdus.</h4>
                </div>
                <div>
                    <h3>KOMANDOS FORMAVIMAS</h3>
                    <h4>nuo 200€</h4>
                    <h4>Subūrėte didelę grupę nuo 6 iki 12 žmonių, kuri norėtų išbandyti save bangose? Pabūti kartu, patirti geras emocijas bei palaikyti vienas kitą? Tai tinkamiausias pasirinkimas jums!</h4>
                </div>
                <div>
                    <h3>INDIVIDUALI PLUS</h3>
                    <h4>120€</h4>
                    <h4>Ši serfingo pamoka tinka tiek naujokams tiek pažengusiems ir su orientuocija į pastioviai daromas esmines klaidas ir kilstelėtų Jūsų techniką į naują lygį. Jei ieškote vertos pamokos - Jūs ją radote.</h4>
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