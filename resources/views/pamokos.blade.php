
@extends('layouts.app')

@section('content')

<!--------------------------------->
<!-------- SECTION PAMOKOS -------->
<!--------------------------------->

<div class="s2 section">
    <div class="content pamokos">
        <h1>PAMOKOS</h1>
        <div class="popular">
            <h2>Populiarios</h2>
            <section>
                <div class='accordion__container'>
                    <h3 class="accordion__button accordion__button--active">PAKETAS</h3>
                    <div class="accordion__content">
                        <h4>Pakete dvi 1h trukmės pamokos, pirmoje pamokoje ramiame vandenyje išmokstam irklavimo, atsistojimo techniką, balanso ir . Antroje pozicionavimą bangose ir technikos tolimesnis įsisavinimas.</h4>
                    </div>
                </div>
                <div class="accordion__container">
                    <h3 class="accordion__button">PRIVATI</h3>
                    <div class="accordion__content">
                        <h4>Per šią pusantros valandos privačią serfingo pamoką pristatysime Jums etiketo, saugumo, serfingo pagrindus, irklavimo techniką, pozicionavimą bangose bei atsistojimo būdus.</h4>
                    </div>
                </div>
                <div class="accordion__container">
                    <h3 class="accordion__button">GRUPINĖ</h3>
                    <div class="accordion__content">
                        <h4>Idealiai tinka pradedantiesiems ar tiems, kurie nori prisiminti pagrindus ir techniką. Pamoka kartu su mumis reiškia, kad mokotės iš geriausių, kad galėtumėte tapti geriausiais.</h4>
                    </div>
                </div>
            </section>
            <h2>Kitos</h2>
            <section>
                <div class="accordion__container">
                    <h3 class="accordion__button">DVIEMS</h3>
                    <div class="accordion__content">
                        <h4>Geriausiai tinka 2 asmenims - draugams ar draugėms, poroms ar artimiesiems. Čia mes pristatysime Jums saugumo ir serfingo pagrindus, irklavimo techniką bei atsistojimo būdus.</h4>
                    </div>
                </div>
                <div class="accordion__container">
                    <h3 class="accordion__button">KORPORATYVAS</h3>
                    <div class="accordion__content">
                        <h4>Subūrėte didelę grupę nuo 6 iki 12 žmonių, kuri norėtų išbandyti save bangose? Pabūti kartu, patirti geras emocijas bei palaikyti vienas kitą? Tai tinkamiausias pasirinkimas jums!</h4>
                    </div>
                    </div>
                <div class="accordion__container">
                    <h3 class="accordion__button">EXTRA</h3>
                    <div class="accordion__content">
                        <h4>Ši serfingo pamoka tinka tiek naujokams tiek pažengusiems ir su orientuocija į pastioviai daromas esmines klaidas ir kilstelėtų Jūsų techniką į naują lygį. Jei ieškote vertos pamokos - Jūs ją radote.</h4>
                    </div>
                </div>
            </section>
        </div>
        <button class="pamokos-reg"></button>
    </div>
</div>    <!--- end SECTION 2  --->

@endsection