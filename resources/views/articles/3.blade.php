@extends('layouts.app')

@section('content')

<main class="bg-grad section content">
  <div class="title">
    <h1>Molas Surf Competition 2015</h1>
    <h2 class="blink"> Pirmasis Lietuvos Banglenčių čempionatas</h2>
  </div>
  <div class="container-lg grid">
    <div class="one">
      <img src="../img/article/3/111.jpg" alt="paveiksliukas juros">
      <img src="../img/article/3/113.jpg" alt="bangos">
      <img src="../img/article/3/112.jpg" alt="serferis">
      <img src="../img/article/3/114.jpg" alt="molas">
    </div>      
    <div class="two">
      <h3>Melnaragė 2015 lapkričio 8d.</h3>
      <img src="../img/article/3/kavine.jpg" alt="apdovanojimai">
      <p>Sąlygos tą diena buvo palankios, truputi atšiaurios, 
        gal net ir labai sudėtingos. Latvijos sportininkai pasiryže 
        lipti į tokias bangas buvo Janis Kudzins ir Kristians Lipse. 
        Lietuvių buvo šiektiek daugiau - Tomas Ūksas, Marius Satkevičius, 
        Marius Sčerbinskas, Girmantas Neniškis, Mindaugas Bučinskas ir Audrius Juškevičius.</p>
    </div>
    <div class="three">
      <p>Pirmosios banglenčių varžybos vykusios Lietuvoje - 
        Lietuvos banglenčių čempionatas, kuriame varžesi 
        pajėgiausi Lietuvos ir Latvijos sportininkai.</p>
      <img src="../img/article/3/poster.jpg" alt="varžybų posteris">
    </div>
    <div class="five">
      <p>Įpatingos pagarbos ir dėkingumo nusipelno mūsų teisėjai, kurie nepabūgo 
        ir ištvėrė mus vertindami tokiomis oro sąlygomis : Gediminas Ustinavičius 
        (Akinys) ir Robertas Gradauskas (Bobas). </p>
      <p>Didelis jiems AČIŪ!</p>   
      <img src="../img/article/3/final.png" alt="finalo lentele">
    </div>
    <div class="six">
      <img src="../img/article/3/top.jpeg" alt="banguoja jura">
      <p>Varžybos prasidėjo apie pietus, dalyviai buvo išdalinti burtų keliu į dvi grupes. 
        Po pirmo raundo iškrito Audrius ir Marius Ščerbinskas, į paguodos roundą išėjo 
        Tomas, Mindaugas, Janis ir Girmantas. Iš antro roundo į finalą pas Kristians ir 
        Marių pateko Tomas ir Girmantas.</p>      
    </div>
    <div class="seven">
      <img src="../img/article/3/115.jpg" alt="paveiksliukas juros">
      <img src="../img/article/3/116.jpg" alt="bangos">
      <img src="../img/article/3/117.jpg" alt="serferis">
      <img src="../img/article/3/118.jpg" alt="molas">
    </div>
  </div>
</main>

  <style>
    .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: auto;
      gap: 1rem;
      grid-template-areas: 
        "side big big text1"
        "side big big text1"
        "side text3 text3 small2"
        "image image image image";
    }
    .one {
      grid-area: side;
      display: grid;
      grid-template-rows: repeat(4, 1fr);
      gap: 1rem;
    }
    .two {
      grid-area: big;
    }
    .three {
      grid-area: text1;
      align-self: center;
    }
    .four {
      grid-area: text2;
      align-self: center;
    }
    .five {
      grid-area: small2;
    }
    .six {
      grid-area: text3;
      align-self: center;
    }
    .seven {
      grid-area: image;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1rem;
      margin-bottom: 2rem;
    }
    main img {
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
    @media screen and (max-width: 1199px) {
      .grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: auto;
      gap: 0.5rem;
      grid-template-areas:
        "text1 big big"
        "side side side"
        "small2 small2 text3"
        "image image image";
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
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
        gap: 0.5rem;
        grid-template-areas:
          "big text1"
          "side side"
          "small2  text3"
          "image image";
      }
      main img{
          padding: 0.5rem;
        }
    }
    @media screen and (max-width: 480px) {
      .grid {
      grid-template-columns: repeat(1, 1fr);
      grid-template-rows: auto;
      grid-template-areas:
        "big" 
        "text1"
        "text3"
        "side"
        "image"
        "small2";
      }
      main img{
        padding: 0;
      }
      .title h1 {
        font-size: 3rem;
      }
      .title h2 {
        font-size: 1.125rem
      }
    }
  </style>

@endsection

@section('meta')

    <title>Banglentė straipsniai - Molas Surf 2015!</title>
    <link rel="canonical" href="https://www.banglente.com/straipsniai/ę">
    <meta name="description" content="Lietuvos banglenčių čempionatas 2015">
    <meta name="keywords" content="surf straipsniai, banglenčių mechanika, banglenčių sportas, surf camp">
    <meta property="og:url" content="https://www.banglente.com/straipsniai/3/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Banglentės - Lietuvos banglenčių čempionatas 2015 !" />
    <meta property="og:description" content="Pirmosios banglenčių varžybos vykusios Lietuvoje - Lietuvos banglenčių čempionatas, kuriame varžesi pajėgiausi Lietuvos ir Latvijos sportininkai" />
    <meta property="og:image" content="https://www.banglente.com/img/article/3/poster3.jpg" />

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection
