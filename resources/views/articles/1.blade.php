@extends('layouts.app')

@section('content')

<main class="bg-grad section">
    <div class="container articles">
        <h1 class="mb-0">Banglentės - kaip jos veikia?</h1>
        <h2 class="mb-4">I dalis - "Greitis"</h2>
        <video id="vid" class="m-auto col-md-7" width="100%" autoplay muted loop>
            <source src="/img/article/sanjuan.mov" type="video/mp4">
        </video>
        <h2 class="mb-4">Daugelis banglentininkų tiesiog nekvaršina sau galvos, kaip viskas vyksta po mūsų kojomis ir lenta.</h2>
        <div class="d-block d-md-flex">
            <div class="content-box">
                <p>Ketinu apsvarstyti keletą pagrindinių mechanikos principų dabar, o paskui jomis remtis būsimuose straipsniuose, kurie bus susiję su čia aptariamais aspektais ir principais.</p>
                <p>Pradėkime nuo "GREIČIO". Tai yra pagrindinis elementas banglenčių sporte, kuris leidžia atlikti 
                    sudėtingesnius manevrus. Kaip mes generuojame greitį? Pagrinde tai du būdai:</p>
                <p>a) leidimasis į apačią nuo aukštesnės bangos dalies link žemesnės (sunkio jėga).</p>
                <div class="p-0 m-auto" style="width: 50%"><img src="/img/article/ball.gif" class="img-fluid" alt="kamuolys"></div>
                <p>Sunkio jėga traukia jus žemyn ir suteikia jums pagreitį, ir net tada, kai 
                pakreipus banglentę kampu į bangą, gravitacija vis dar padeda vystyti greitį. 
                Laimei, sunkio jėga nėra vienintelis greitį generuojantis veiksnys :)  
            </div>
            <div class="content-side">
                <h2>SUNKIO JĖGA</h2>
                <img src="/img/article/surfdrop.jpg" class="img-fluid" alt="surfer drop">
                <h3 style="font-family:initial; font-weight:bold" class="fs-4 text-light">kuo didesnis kampas<br>tuo didesnis banglentės pagreitis</h3>
                <img src="/img/article/newton.jpg" class="img-fluid" alt="antras newtono desnis">
            </div>
        </div>
        <div class="d-block d-md-flex">
            <div class="content-box">
                <p>b) vandens srautas bangos paviršiuje, galima sakyti, lieka vietoje.</p>
                <p>Bangavimas - tai daugiausia bangos energijos judėjimas, o ne vandens. Jei ant  paviršiaus 
                    padėtumėt guminę antutę ar kamuolį ir stebėtumėte bangas, antis tik pakils ir nusileis, 
                    kai banga praeis pro jos apačią, ji nebus pakelta ir bangos nunešta tolyn. Tai yra 
                    vadinamas "Efektyvus srautas" - lyg vandens tekėjimas bangos veidu AUKŠTYN iš 
                    banglentininko perspektyvos.</p>
                <div class="p-0 m-auto" style="width: 50%">
                    <img src="/img/article/wave.jpg" class="img-fluid" alt="railas i banga">
                </div>
                <p>Kai įrėžiame banglentės reilą (angl. 'rail') į bangos feisą (angl. face), įvyksta du dalykai:
                     mūsų banglentė įsikabina į bangos feisą, taip ji generuoja keliamąją jėgą (angl. 'lift') ir 
                     stūmimą į priekį (angl. 'forward thrust').</p>
                 <p>Priklausomai nuo to, kaip lenta sąveikauja su vandens srautu, kėlimo, traukos ir sukibimo kiekis 
                     gali būti kaičiamas, kad geriau atitiktų norimus ar planuojamus manevrus.</p>
        
            </div>

            <div class="content-side">
                <h2>VANDENS PAVIRŠIUS</h2>
                <img src="/img/article/water.gif" class="img-fluid" alt="vandens judejimas">
                <img src="/img/article/aipa.jpg" class="img-fluid" alt="railas i banga">
            </div>
        </div>
        <h2 class="mt-4 text-white">Efektyviai naudojant abu šiuos principus galima pasiekti gan nemažą greitį.</h2>
        <h2 class="mb-4">Sekmės bangose!</h2>
    </div>
</main>

@endsection

@section('meta')

    <title>Banglentė straipsniai - Viskas apie banglentes!</title>
    <link rel="canonical" href="https://www.banglente.com/straipsniai/1">
    <meta name="description" content="Kas yra banglentės ir kaip ji veikia?">
    <meta name="keywords" content="surf straipsniai, banglenčių mechanika, banglenčių sportas, surf camp">
    <meta property="og:url" content="https://www.banglente.com/straipsniai/1/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Banglentės - kaip jos veikia?" />
    <meta property="og:description" content="Keletas pagrindinių mechanikos principų apie banglentes susipažinimui, pagrinde apie greičio generacijos mechaniką." />
    <meta property="og:image" content="https://www.banglente.com/img/article/surfdrop.jpg" />

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection