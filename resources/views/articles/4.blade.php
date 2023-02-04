@extends('layouts.app')

@section('content')

<main class="bg-grad section content">
  
  <div class="title mb-5 mt-0">
    <h1>Molas Surf 2016</h1>
    <h2>Lietuvos Banglenčių Čempionatas</h2>
    <h3>2016 Rugsėjo 30 d.</h3>
  </div>
  
  <div class="grid container-lg">

    <div class="one pics">
      <img src="../img/article/4/210.jpg" alt="molas surf">
      <img src="../img/article/4/211.jpg" alt="teisejai dirba">
      <img src="../img/article/4/212.jpg" alt="varzybu momentas">
      <img src="../img/article/4/213.jpg" alt="banglentes guli">
    </div>
    
    <div class="two">
      <p>Rugsėjo 30 d. dieną vyko, antrus metus iš eilės, VšĮ"Banglentė" rengiamos, 
      "Molas Surf 2016" varžybos, kurios šiais metais peraugo į didelį nuostabų renginį.</p>
      <p>Šiais metais dalyvių skaičius buvo ženkliai didesnis, čempionate užsiregistravo 19 
      sportininkų iš Lietuvos ir Latvijos. Taip pat dalyvauti nepabūgo ir puikiai pasirodė 
      Latvijos atstovė Santa Vevere bei lietuvaitė Agnese Šatavičiūtė.</p>
    </div>

    <div class="four pics">
      <img src="../img/article/4/title.jpg" alt="molas ir jura">
    </div>

    <div class="three">
      <p>Varžybos buvo perkeltos iš trečiadienio į penktadienį dėl palankesnių prognozių, 
      kas mūsų manymu, pilnai pasiteisino.</p>
      <p>Po teisėjų pasitarimo ir burtų traukimo, varžyboms buvo duotas startas 10:15. 
        Pirmas čempionato raundas susidėjo iš 4 plaukimų po 5 banglentininkus kiekviename. 
        Sportininkai buvo apsirengė balta, geltona, mėlyna, raudona ir juoda apranga, 
        kad palengvinti teisėjų dalią.</p>
      <p>Pirmo raundo pirma ir antra vieta nukeliavo į trečią raundą, na o likę sportininkai 
        turėjo dar parodyti ko verti antrame ( repechage ) raunde. Antro raundo pirmame plaukime 
        susirungė du pajėgiausi šio raundo dalyviai - Kristians ir Domas. Abu sportininkai gavo 
        labai gerus balus, tačiau latvio bangos buvo įvertintos aukštesniais balais ir jis pateko į trečią raundą.
        Ketvirtame užplaukime visą laiką pirmavęs Averjanas buvo aplenktas Santos, kuri gavus 
        geresnius balus po pračiuožtos paskutinės bangos.</p>
    </div>
    


    <div class="eight pics">
      <img src="../img/article/4/prizai.jpg" alt="prizai">
    </div>

    <div class="five">
      <p>Trečias raundas prasidėjo truputi pagerėjus sąlygoms, pora metru sumažėjus vėjui ir išlindus saulei. 
      Keturi plaukimai po 3 sportininkus suteikė žiurovams dvi valandas puikių vaizdų ir gerų emocijų. 
      Po šio raundo į finalą išėjo tik 4 sportininkai iš 12, o 8 banglentininkams ir banglentininkėms varžybos baigėsi.</p>
    </div>

    <div class="nine pics">
      <img src="../img/article/4/lentele.jpg" class="p-0" alt="lentele">
    </div>

    <div class="six">
      <p>Finalas buvo labai įtemptas ir jautėsi visų dalyvių noras tapti Čempionu. Po pirmos puikiai nuraižytos bangos 
      išsiveržęs į priekį Marius Ščerbinskas ( 6.3 balai ) visą plaukimą užtikrintai pirmavo prieš kitus tris sportininkus 
      ir buvo labai arti pergalės, bet praėjusių metų pirmos vietos laimėtojas Kristians Lipse su paskutine savo puikiai 
      suvaldyta banga išplėšė sudėtingą ir gražią pergalę. Tuo apgindamas savo titulą ir pasiimdamas nemenką trofėjų bei vertingus prizus.</p>
    </div>
    
    <div class="carousel">
      <button class="b-left is-hidden">
          <img src="/img/left-solid.svg" alt="left arrow">
      </button>
      <div class="track-container">
          <ul class="carousel-track">
            <li class="carousel-slide current-slide">
              <img src="../img/article/4/214.jpg" alt="">
            </li>
            @for ($i = 215; $i < 264; $i++)
              <li class="carousel-slide">
                <img src="../img/article/4/{{ $i }}.jpg" alt="">
              </li>
            @endfor
          </ul>
      </div>
      <button class="b-right">
          <img src="/img/right-solid.svg" alt="right arrow">
      </button>
    </div>

    <div class="ten">
      <p>Mes savo ruoštu sveikiname Kristians Lipse (Čempionas), Marius Ščerbinskas (II vieta) ir Renars Birmanis (III vieta).</p>
      <p>Be galo dėkojame mūsų remėjams ir pagalbininkams: Klaipėdos miesto savivaldybei, UAB Juneka, UAB Estma, Audriui Juškevičiui, Jolantai Laurinkutei Akiniėnei, Virginijui Urbonui, Dainiui Šerpyčiui ir Redbull.</p>
      <p>Didžiausia pagarba ir dėkingumas mūsų teisėjams: Gediminui Ustinavičiui (Akiniui), Gintui Lapėnui (Vėjas Galvoje) ir Donatui Mariui</p>
    </div>
    
  </div>
  
</main>

  <style>
    .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 450px 450px 450px 250px auto auto;
      gap: 1rem;
      grid-template-areas: 
        "side title-img title-img big"
        "side  text1 text1 text1"
        "side text2 img2 img2"
        "side text3 text3 text3"
        "carousel carousel img3 img3"
        "last last last last";
      margin-bottom: 2rem;
    }
    .one {
      grid-area: side;
      display: grid;
      grid-template-rows: repeat(5, 1fr);
      gap: 0.5rem;
    }
    .carousel {
      grid-area: carousel;
      height: 450px!important;
    }
    .two {
      grid-area: big;
    }
    .three {
      grid-area: text1;
      align-self: center;
    }
    .four {
      grid-area: title-img;
      align-self: center;
    }
    .five {
      grid-area: text2;
      align-self: center;
    }
    .six {
      grid-area: text3;
      align-self: center;
    }
    .eight {
      grid-area: img2;
    }
    .nine {
      grid-area: img3;
    }
    .ten {
      grid-area: last;
    }
    .nine img {
      height: 100%;
      width: auto;
      margin: auto;
      display: block;
    }
    .pics img {
      object-fit: cover;
      width: 100%;
      max-height: 100%;
      padding: 1rem;
    }
    main p {
      font-size: 1.25rem;
      line-height: 1.5rem;
      text-align: left;
      font-family: alegreya;
      text-shadow: none;
      margin-bottom: 1rem;
      padding: 1rem
    }
    .carousel {
      width: 90%;
      height: 100%;
    }
    .track-container ul Li img {
      object-fit: cover;
      border-radius: 0.4rem;
      width: 100%;
      height: 100%;
    }
    @media screen and (max-width: 1199px) {
      .grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: auto;
      gap: 0.5rem;
      grid-template-areas:
        "title-img title-img big"
        "text1 text1 text1"
        "side side side"
        "text2 text2 text2"
        "img3 text3 text3"
        "last last img2"
        "carousel carousel carousel";
      }
      .one {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: 1fr;
        gap: 1rem;
      }
    }
    @media screen and (max-width: 576px) {
      .grid {
        display: block;
      }
      main img{
        padding: 0;
        width: 100%;
      }
      main p {
        font-size: 1.25rem;
        line-height: 1.5rem;
        text-align: justify;
        font-family: alegreya;
        text-shadow: none;
        margin-bottom: 1rem;
        padding: 0rem
      }
      .title h1 {
        font-size: 3rem;
      }
      .title h2 {
        font-size: 1.125rem
      }
      .one {
        grid-template-columns: repeat(2, 1fr);
      }
      .pics img {
        padding: 0;
      }
      .carousel {
        width: 100%;
        height: 250px!important;
      }
    }
  </style>

@endsection

@section('meta')

    <title>Banglentė straipsniai - Molas Surf 2016!</title>
    <link rel="canonical" href="https://www.banglente.com/straipsniai/4">
    <meta name="description" content="Lietuvos banglenčių čempionatas 2016">
    <meta name="keywords" content="surf straipsniai, banglenčių mechanika, banglenčių sportas, surf camp">
    <meta property="og:url" content="https://www.banglente.com/straipsniai/4/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Banglentės - Lietuvos banglenčių čempionatas 2016 !" />
    <meta property="og:description" content="Atrus metus iš eilės mūsų rengtos varžybos - Lietuvos banglenčių čempionatas, kuriame varžesi pajėgiausi Lietuvos ir Latvijos sportininkai" />
    <meta property="og:image" content="https://www.banglente.com/img/article/4/poster2.jpg" />

@endsection

@section('scripts')
  <script type="text/javascript" src="/js/topnav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/accordion.js"></script>
  <script type="text/javascript" src="/js/carousel.js"></script>
@endsection


