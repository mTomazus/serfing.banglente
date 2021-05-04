@extends('layouts.app')

@section('content')

    <!----------------------------------->
    <!-------- Sekcija KONTAKTAI -------->
    <!----------------------------------->

    <div class="bg-grad section content contacts-page">
        <div class="contacts__content">
            <div class="lg">
                <h1>KONTAKTAM</h1>
                <div class="lg__info">
                    <div class="content-box">
                        <div>
                            <a href="/karjera/">
                                <div>
                                    <img src="/img/savanoris.jpg" alt="savanorystė">
                                    <h3>KARJERA</h3>
                                    <h4>Svajonių darbas laukia taves!</h4>
                                    <h4>Mus sieja - meilė banglenčių sportui, jūrai ir paplūdimiui. Visada ieškome žmonių su kuriais galėtume dalintis šia aistra, mokytis ir tobulėti kartu.</h4>
                                    <h4> Junkis prie mūsų.</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="/parama/">
                                <div>
                                    <img src="/img/parama.jpg" alt="skimboards">
                                    <h3>PARAMA</h3>
                                    <h4>Prašome paremti VšĮ „Banglentė“ veiklą.</h4>
                                    <h4>Iki gegužės 1 d. skirdami mums GPM paramą. Jums ši parama nieko nekainuoja, o mums - tai vienas iš organizacijos finansavimo šaltinių, kuris bus panaudotas sporto plėtojimui, inventoriaus pirkimui ir varžybų organizavimui.</h4>
                                </div>
                            </a> 
                        </div>
                        <div class="mb-0">
                            <a href="#">
                                <div>
                                    <img src="/img/dokumentai.jpg" alt="ataskaitos">
                                    <h3>ATASKAITOS</h3>
                                    <h4>Praėjusių metų finansiniai dokumentai.</h4>
                                    <h4>Atlikti darbai</h4>
                                    <h4>PN ataskaita - Balansas - Aiškinamasis raštas</h4>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="content-side">
                        <h2>SOCIAL</h2>
                            <div class="social d-flex justify-content-around">
                                <a href="https://www.instagram.com/banglente/" target=“_blank”><img src="/img/in-icon.png"></a>
                                <a href="https://www.facebook.com/banglente" target=“_blank”><img src="/img/fb-icon.png"></a>
                                <a href="https://www.youtube.com/channel/UCbcobM7kKzfznOQEpIrZJqA" target=“_blank”><img src="/img/yt-icon.png"></a>
                                <a href="https://t.me/LT_Serfing" target=“_blank”><img src="/img/tg-icon.png"></a>
                            </div>
                        <h2>REKVIZITAI</h2>
                        <!--- <img class="elastic" width="50%" src="/img/naujas-title.png" alt="banglente logo"> --->
                        <div class="rekvizitai text-white">
                            <h3>VšĮ Banglentė</h3>
                            <h3>Vėtros g. 8, Klaipėda</h3>
                            <h3>Tel. +370 686 02356</h3>
                            <h3>El.p. sales@banglente.com</h3>
                            <h3>Įmonės kodas - 304105037</h3>
                            <h3>Bankas - LT227300010144594068</h3>
                        </div>
                        <h2>RAŠYKITE MUMS</h2>
                        @livewire('contact-form')
                    </div>
                </div>
                <div class="mb-5">
                    <iframe width="100%" height="300" frameborder="2" scrolling="no" marginheight="4rem" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Vėtros%20g.%208%20Klaipėda+(Banglente)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
            
            <div class="sm">
                <div class="menu my-4 py-2">
                    <ul>
                        <a href="/karjera/">karjera</a>
                        <a href="/parama/">parama</a>
                        <a href="#">ataskaitos</a>
                    </ul>
                </div>
                <div class="rekvizitai my-4 py-3">
                    <img class="elastic" src="/img/naujas-title.png" alt="banglente logo">
                    <h2 class="text-white">VšĮ Banglentė</h2>
                    <h2 class="text-white">Vėtros g. 8, Klaipėda</h2>
                    <h2 class="text-white">Įmonės kodas - 304105037</h2>
                    <h2 class="text-white">Bankas - LT227300010144594068</h2>
                </div>

                <div class="col-11 my-4 py-3 mx-auto">
                    <h2 class="text-white">SUSISIEKITE</h2>
                    @livewire('contact-form')
                </div>
            </div>

        </div>
    </div>

@endsection

@section('meta')

    <title>Banglentė - mokomes serfinti Lietuvoje</title>
    <link rel="canonical" href="https://www.serfingas.lt/contacts/">
    <meta name="description" content="Griebiam banglentes ir į bangas, išsinuomuok banglente , SUPą Klaipėdoje ir Melnragėje, banglenčių mokykla.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection