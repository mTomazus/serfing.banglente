@extends('layouts.app')

@section('content')

<main class="bg-grad">
    <div class="section container-lg">

        <div class="title">
            <h1>STOVYKLOS</h1> 
        </div>

        <h3>Mes aštuntus metus vaikų ir suaugusiųjų poilsį organizuojanti 
            banglenčių mokykla Melnragėje. Stovyklose dirba patyrę ir aukštos 
            kvalifikacijos instruktoriai ir treneriai, kurie pasiruošę mokyti 
            ir padėti savo auklėtiniams išmokti banglenčių sportą nuo pat pradžios.</h3>

        <div class="d-grid d-md-inline-flex justify-content-around">

            <div class="col-md-5 korta">
                <div class="">
                    <a href="../stovykla" class="content-box">
                        <h2>Vaikų stovykla</h3>
                        <img src="/img/18.jpg">
                        <p>Stovykloje vaikai mokomi ne tik praktinių banglenčių mokymosi aspektų, 
                            bet ir teorinių žinių apie banglenčių įrangą, techniką, saugumą vandenyje. 
                            Mes taip pat puikiai žinome ir suprantame savo atsakomybę už vaikų saugumą 
                            ir atsakingą banglenčių sporto praktiką. Todėl, instruktoriai skiria įpatingą 
                            dėmesį mokymo procesui, užtikrinant, kad veikai būtų saugūs ir banglenčių praktika 
                            vyktų etiškai ir atsakingai.</p>
                    </a>  
                </div>
            </div>
            <div class="col-md-5 korta">
                <div class="">
                    <a href="../stovyklos/suaugusiems/lanzarote" class="content-box">
                        <h2>Suaugusiems</h2>
                        <img src="/img/san_juan.jpg">
                        <p>Banglenčių stovykla yra puiki proga, kurios metu keliaujama į skirtingas vietas, 
                            kad būtų galima pasimėgauti vienomis geriausių pasaulyje bangų. Tai puikus būdas atrasti 
                            naujas vietas, patirti skirtingas kultūras ir susipažinti su bendraminčiais, turinčiais 
                            aistrą serfingui. Tipinė surf kelionė gali trukti nuo kelių dienų iki kelių savaičių, priklausomai 
                            nuo užsibrėštų tikslų ir individualių nuostatų. Nesvarbu, ar esate patyręs profesionalas, 
                            ar pradedantysis, mūsų stovyklos suteiks neįkainojamą patirtį, pilną nuotykių, adrenalino ir gerų emocijų.</p>
                    </a>
                </div>
            </div>
        </div>    

    </div>
</main>

<style>
    .korta {
        position: relative;
        border: 1px solid white;
        height: max-content;
        margin-top: 1rem;
    }
    .korta h2 {
        position: absolute;
        left: 0;
        right: 0;
        top: 1.25rem;
        font-size: 3rem;
        text-shadow: 2px 2px 2px black;
        background: #00000070;
    }
    .korta p {
        font-family: alegreya;
        font-size: 1.125rem;
        line-height: 1.25rem;
        text-align: justify;
        max-width: 100%;
        padding: 0.75rem 0.75rem;
        margin: 0;
        background: #292a2a99;
    }
    .korta img {
        width: 100%;
    }
    .carousel {
        width: 100%!important;
    }
    .content-box {
        width: 100%
    }
    .section {
        display: grid;
        min-height: 90vh;
    }
</style>

@endsection

@section('meta')
    
    <title>Banglentė - Stovyklos vaikams ir suaugusiems</title>
    <link rel="canonical" href="https://www.banglente.com/stovyklos/">
    <meta name="description" content="Banglenčių stovyklos vaikams ir suaugusiems , kelionės į kitas banguotas šalis">
    <meta name="keywords" content="banglenčių nuoma, irklenčių nuoma, bodyboardai, surfboard rental, hidrokostiumų nuoma, wetsuits rental, rent surf, hidrokostiumai, riedlentės, nuoma, klaipeda, surfer">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection