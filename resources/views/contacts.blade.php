@extends('layouts.app')

@section('content')

    <!----------------------------------->
    <!-------- Sekcija KONTAKTAI -------->
    <!----------------------------------->

    <div class="content section contacts-page">
        <div class="contacts__content bg-grad">
            <h1>KONTAKTAMS</h1>
            <div class="lg">
                <div class="lg__info">
                    <div class="content-box">
                        <div>
                            <a href="#">
                                <div>
                                    <img src="./img/savanoris.jpg" alt="savanorystė">
                                    <h3>KARJERA</h3>
                                    <h4>Svajonių darbas laukia taves!</h4>
                                    <h4>Mus sieja - meilė banglenčių sportui, jūrai ir paplūdimiui. Visada ieškome žmonių su kuriais galėtume dalintis šia aistra, mokytis ir tobulėti kartu.</h4>
                                    <h4> Junkis prie mūsų.</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <img src="./img/skim-sm.jpg" alt="skimboards">
                            <h3>PARAMA</h3>
                            <h4>10€ - dvi valandos</h4>
                            <h4>Subūrėte didelę grupę nuo 6 iki 12 žmonių, kuri norėtų išbandyti save bangose? Pabūti kartu, patirti geras emocijas bei palaikyti vienas kitą? Tai tinkamiausias pasirinkimas jums!</h4>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="./img/dokumentai.jpg" alt="ataskaitos">
                                    <h3>ATASKAITOS</h3>
                                    <h4>Praėjusių metų finansiniai dokumentai.</h4>
                                    <h4>Atlikti darbai</h4>
                                    <h4>PN ataskaita - Balansas - Aiškinamasis raštas</h4>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="content-side">
                        <h2>APIE MUS</h2>
                        <img class="elastic" width="50%" src="/img/naujas-title.png" alt="banglente logo">
                        <div class="rekvizitai">
                            <h3>VšĮ Banglentė</h3>
                            <h3>Vėtros g. 8, Klaipėda</h3>
                            <h3>Įmonės kodas - 304105037</h3>
                            <h3>Bankas - LT227300010144594068</h3>
                        </div>
                        <h2>RAŠYKITE MUMS</h2>
                        @livewire('contact-form')
                    </div>
                </div>
                <div>
                    <iframe width="100%" height="300" frameborder="2" scrolling="no" marginheight="4rem" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Vėtros%20g.%208%20Klaipėda+(Banglente)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
            
            <div class="sm">
                <div class="rekvizitai">
                    <img class="elastic" src="/img/naujas-title.png" alt="banglente logo">
                    <h2>VšĮ Banglentė</h2>
                    <h2>Vėtros g. 8, Klaipėda</h2>
                    <h2>Įmonės kodas - 304105037</h2>
                    <h2>Bankas - LT227300010144594068</h2>
                </div>
                <div class="menu">
                    <ul>
                        <a href="#">karjera</a>
                        <a href="#">parama</a>
                        <a href="#">ataskaitos</a>
                    </ul>
                </div>
                <div>
                    <h3 class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsa rerum distinctio, non voluptatum qui enim veritatis?
                    At autem deserunt exercitationem consequatur.</h3>
                </div>
            </div>

        </div>
    </div>

@endsection