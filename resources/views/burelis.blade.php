@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- BURELIS SECTION  -------->
<!---------------------------------->
<div class="bg-grad">
    <div class="content burelis section">    
        <div>
            <h1>BANGLEČIŲ SPORTO SEKCIJA 2022</h1>
            <h2>Būrelis atsirado kaip banglenčių stovyklos sudedamoji dalis.</h2>
        </div>
        <div class="container-md">
            <div class="lg__info">
                <div class="content-box">
                    <p>Mes jau septintus metus veikianti banglenčių mokykla Melnragėje.</p>
                    <div style="position: relative;background: no-repeat;box-shadow:none;display:flex;margin: auto;">
                        <img class="col-lg-8 col-12 m-auto shadow" src="/img/wright.jpg" alt="wright bureliui">
                        <img class="col-lg-8 m-auto d-none d-lg-block shadow-none" style="position:absolute;width:150px;left:75px;top:-30px;" src="/img/logo.svg" alt="surfclub logo">
                    </div>
                    <article>
                        <p>Būrelis organizuojamas pasibaigus vasaros atostogoms, grupės yra riboto dydžio, todėl skambinkite arba registruokites jau dabar.</p>
                        <p>Sekcija vyksta 2 kartus per savaitę, vieną darbo dieną ir savaitgalį.</p>
                        <p>Laikas ir diena kiekvieną savaitę nustatoma pagal oro prognozes.</p>
                    </article>
                    <article>
                        <p>Būrelio metu suteikiame visas reikalingas sporto priemones:</p>
                        <ul class="my-4">
                            <li>įvairaus dydžio minkštas banglentes;</li>
                            <li>šiltus hidrokostiumus ir esant reikalui batus;</li>
                            <li>"surfskate" ir "classic" tipo riedlentes;</li>
                            <li>pirštines ir prireikus kapišonus.</li>
                        </ul>
                        <p class="my-4">Ši programa apima tiek teorinius, tiek praktinius užsiemimus jūroje.</p>        
                    </article>
                    <article>
                        <p>Mėnesinis mokestis 100€.</p>
                    </article>
                    <p>Norint užsiregistruoti, reikia užpildyti registracijos formą ir atlikti apmokįjimą į<br>"VšĮ Banglentė" sąskaitą - LT22 7300 0101 4459 4068 (swed).</p>
                    <p>Visada mielai atsakysime į visus jums kylančius klausimus telefonu. </p>
                </div>

                <div class="content-side d-flex flex-md-column flex-column-reverse">
                    <div class="d-none d-md-block">
                        <h2>REMĖJAI</h2>
                        <section class="d-flex flex-row bg-white w-100 mb-4">
                            <img style="width:25%;margin:auto;box-shadow:none" src="/img/oneill.png" alt="">
                            <img style="width:25%;margin:auto;box-shadow:none" src="/img/klaiped.png" alt="">
                            <img style="width:25%;margin:auto;box-shadow:none" src="/img/kl.jpeg" alt="">
                        </section>
                    </div>
                    
                    <div class="d-none d-md-block">
                        <h2>GALERIJA</h2>
                    </div>

                    <div>
                        <h2>REGISTRACIJA</h2>
                        @livewire('burelis-form')
                    </div>
                    <div>
                        <h2>TIKSLAI</h2>
                        <ul>
                            <li>Pažinti banglenčių sportą</li>
                            <li>Palaikyti gerą fizinę formą</li>
                            <li>Įtvirtinti bazinę techniką</li>
                            <li>Ugdyti plaukimo įgūdžius</li>
                            <li>Saugiai elgtis vandenyje</li>
                            <li>Sužinoti teorija apie jūrą ir bangas</li>
                            <li>Pratybos su riedlentėmis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection

@section('meta')

    <title>Banglenčių sporto sekcija!</title>
    <link rel="canonical" href="https://www.banglente.com/burelis/">
    <meta name="description" content="Banglenčių sporto sekcija Klaipėdoje, vaikų būreliai.">
    <meta name="keywords" content="banglenčių būrelis vaikams, vaikų sporto būrelis, Vaikų banglenčių sekcija klaipėdoje, burelis, bureliai, surf camp">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    
@endsection