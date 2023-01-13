@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- SECTION STOVYKLA -------->
<!---------------------------------->
<div class="stovykla section bg-grad">
    <div class="content container">    
        <div class="content--scroll">
            <div>
                <h1>VASAROS STOVYKLA 2022</h1>
                <h2>Programa iš dalies finansuojama Savivaldybės Lėšomis!</h2>
            </div>
            <div class="lg">
                <div class="lg__info">

                    <div class="content-box">
                        <p>Mes jau šeštus metus veikianti banglenčių mokykla Melnragėje.</p>
                        <article>
                            <img src="/img/camp2-300.jpg" class="px-3 py-1 float-start me-3" alt="vaikų stovykla">
                            <p>Stovykla organizuojama nuo Birželio vidurio iki Rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje. Grupės sudaromos iš 8-10 mokančių plaukti vaikų nuo 10 iki 18 metų.</p>
                            <p>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30).</p>
                        </article>
                        <p>Stovyklautojam suteikiame visas reikalingas sporto priemones:</p>
                        <article>
                            <img src="/img/camp-300.jpg" class="px-3 py-1 float-end ms-3" alt="vaikų stovykla">
                            <ul class="my-4">
                                <li>įvairaus dydžio minkštas banglentes;</li>
                                <li>šiltus hidrokostiumus ir esant reikalui batus;</li>
                                <li>"carver", "smoothstar" ir "classic" tipo riedlentes;</li>
                                <li>taip pat išbandysime ir irklentes.</li>
                            </ul>
                            <p class="my-4">Ši savaitinė programa apima tiek teorines, tiek praktines žinias apie jūrą, bangas ir banglentes. Stovykla tinka tiek pirmą kartą atvykstančiam į stovyklą, tiek ir trečią ar ketvirtą. Visi instruktoriai patyrę Klaipėdos gelbėtojai ir ilgametę patirtį turintys banglenčių instruktoriai, bet, svarbiausia, jie žino, kaip padaryti stovyklą nepamirštamu vasaros nuotykiu kiekvienam stovyklos dalyviui.</p>        
                            <p class="pt-4 text-center"><a class="color-white" href="/incoming/programa.pdf" target="_blank">Preliminari programa*</a></p>
                        </article>
                        <article>
                            <p>Pamainos kaina 220€.</p>
                            <p>Maitinimas įskaičiuotas</p>
                        </article>
                        <p>Norint užsiregistruoti, reikia užpildyti registracijos formą ir atlikti avansini 70 Eur pavedimą į<br>"VšĮ Banglentė" sąskaitą - LT22 7300 0101 4459 4068 (swed). Neatvykus į stovyklą avansas negrąžinamas.</p>
                        <p>Visada mielai atsakysime į visus jums kylančius klausimus telefonu. </p>
                    </div>

                    <div class="content-side">
                        <h2>REMĖJAI</h2>
                        <section class="d-flex flex-row bg-white w-100 mb-4">
                            <img style="width:25%;margin:auto;box-shadow:none" src="/img/oneill.png" alt="">
                            <img style="width:25%;margin:auto;box-shadow:none" src="/img/klaiped.png" alt="">
                            <img style="width:25%;margin:auto;box-shadow:none" src="/img/kl.jpeg" alt="">
                        </section>

                        <h2>GALERIJA</h2>

                        <!--------- Galerija StovyklaCarousel --------->
                        <div class="carousel mb-4">
                            <button class="b-left is-hidden">
                                <img src="/img/left-solid.svg">
                            </button>
                            <div class="track-container">
                                <ul class="carousel-track">
                                    @foreach ($images as $image)
                                        <li class="carousel-slide current-slide">
                                            <img src="{{ asset($image) }}" alt="">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <button class="b-right">
                                <img src="/img/right-solid.svg">
                            </button>
                        </div>
                        
                        <h2>REGISTRACIJA</h2>
                        @livewire('stovykla-form')

                        <h2>DIENOTVARKĖ</h2>
                        <div class="">
                            <ul>
                                <li>8:45–9:30 val. Atvykimas ir registracija;</li>
                                <li>Supažindinimas su stovyklos saugumo taisyklėmis;</li>
                                <li>Susipažinimas su inventoriumi ir priemonėmis;</li>
                                <li>Banglenčių treniruotės krante ir vandenyje;</li>
                                <li>Maitinimas du kartus: pietūs ir užkandžiai;</li>
                                <li>Daug puikių įspūdžių atvirame ore;</li>
                                <li>Teorija apie jūrą, banglentes ir bangas;</li>
                                <li>Užsiėmimai su riedlentėmis;</li>
                                <li>Išvykimas 17:00-17:30 val.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm">
                <img class="px-3 py-1" src="/img/vaikas2.jpg">
                <h3>Stovykla organizuojama nuo Birželio vidurio iki Rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje. Grupės sudaromos iš 6-8 mokančių plaukti vaikų nuo 10 iki 18 metų.</h3>
                <h3>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30), bet galimi ir vienos ar keletos dienų variantai.</h3>
                <h3><a href="/incoming/programa.pdf" target="_blank" style="display: initial">Stovyklos preliminari programa čia</a></h3>
                <img class="px-3 py-1" src="/img/vaikai.jpg">
                <h2>Pamainos kaina 220 Eurų.</h2>
                <h3>Maitinimas įskaičiuotas</h3>
                <h2 class="text-white">Norint registruotis užpildykite formą</h2>
                <div class="col-11 mx-auto">
                    @livewire('stovykla-form')
                </div>
            </div>

            <!--- 2021 metu galerija --->
            <div>
                <h1>2021 Vaikų vasaros stovykla</h1>
                <div id="Gallery2021" data-bs-toggle="modal" data-bs-target="#Modal2021" class="lg d-flex flex-wrap">
                    @foreach (array_values($images21th) as $i => $image21th)
                        <div class="col-3">
                            <img class="w-100" loading="lazy" data-bs-target="#Carousel2021" data-bs-slide-to="{{ $i }}" src="{{ asset($image21th) }}" alt="vaikų stovyklos nuotrauka">
                        </div>
                    @endforeach
                </div>
                <div class="modal" id="Modal2021" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stovykla 2021</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">                            
                                <div id="Carousel2021" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach (array_values($images21) as $i => $image21)
                                            <div class="carousel-item @if($i == '0') active @endif">
                                                <img class="d-block w-100" loading="lazy" src="{{ asset($image21) }}" alt="vaikų stovyklos nuotrauka">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#Carousel2021" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#Carousel2021" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 2020 metu galerija --->
            <div>
                <h1>2020 Vaikų vasaros stovykla</h1>
                <div id="Gallery2020" data-bs-toggle="modal" data-bs-target="#Modal2020" class="lg d-flex flex-wrap">
                    @foreach (array_values($images20th) as $i => $image20th)
                        <div class="col-3">
                            <img class="w-100" loading="lazy" data-bs-target="#Carousel2020" data-bs-slide-to="{{ $i }}" src="{{ asset($image20th) }}" alt="vaikų stovyklos nuotrauka">
                        </div>
                    @endforeach
                </div>
                <div class="modal" id="Modal2020" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stovykla 2020</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            
                                <div id="Carousel2020" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach (array_values($images20) as $i => $image20)
                                            <div class="carousel-item @if($i == '0') active @endif">
                                                <img class="d-block w-100" loading="lazy" src="{{ asset($image20) }}" alt="vaikų stovyklos nuotrauka">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#Carousel2020" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#Carousel2020" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 2019 metu galerija --->
            <div>
                <h1>2019 Vaikų vasaros stovykla</h1>
                <div id="Gallery2019" data-bs-toggle="modal" data-bs-target="#Modal2019" class="lg d-flex flex-wrap">
                    @foreach (array_values($images19th) as $i => $image19th)
                        <div class="col-3">
                            <img class="w-100" loading="lazy" data-bs-target="#Carousel2019" data-bs-slide-to="{{ $i }}" src="{{ asset($image19th) }}" alt="vaikų stovyklos nuotrauka">
                        </div>
                    @endforeach
                </div>
                <div class="modal" id="Modal2019" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stovykla 2019</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">                            
                                <div id="Carousel2019" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach (array_values($images19) as $i => $image19)
                                            <div class="carousel-item @if($i == '0') active @endif">
                                                <img class="d-block w-100" loading="lazy" src="{{ asset($image19) }}" alt="vaikų stovyklos nuotrauka">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#Carousel2019" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#Carousel2019" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- 2018 metu galerija --->
            <div>
                <h1>2018 Vaikų vasaros stovykla</h1>
                <div id="Gallery2018" data-bs-toggle="modal" data-bs-target="#Modal2018" class="lg d-flex flex-wrap">
                    @foreach (array_values($images18th) as $i => $image18th)
                        <div class="col-3">
                            <img class="w-100" loading="lazy" data-bs-target="#Carousel2018" data-bs-slide-to="{{ $i }}" src="{{ asset($image18th) }}" alt="vaikų stovyklos nuotrauka">
                        </div>
                    @endforeach
                </div>
                <div class="modal" id="Modal2018" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stovykla 2018</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            
                                <div id="Carousel2018" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach (array_values($images18) as $i => $image18)
                                            <div class="carousel-item @if($i == '0') active @endif">
                                                <img class="d-block w-100" loading="lazy" src="{{ asset($image18) }}" alt="vaikų stovyklos nuotrauka">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#Carousel2018" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#Carousel2018" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            <!--- 2017 metu galerija --->
            <div>
                <h1>2017 Vaikų vasaros stovykla</h1>
                <div id="Gallery2017" data-bs-toggle="modal" data-bs-target="#Modal2017" class="lg d-flex flex-wrap">
                    @foreach (array_values($images17th) as $i => $image17th)
                        <div class="col-3">
                            <img class="w-100" loading="lazy" data-bs-target="#Carousel2017" data-bs-slide-to="{{ $i }}" src="{{ asset($image17th) }}" alt="vaikų stovykla">
                        </div>
                    @endforeach
                </div>
                <div class="modal" id="Modal2017" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Stovykla 2017</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">                            
                                <div id="Carousel2017" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach (array_values($images17) as $i => $image17)
                                            <div class="carousel-item @if($i == '0') active @endif">
                                                <img class="d-block w-100" loading="lazy" src="{{ asset($image17) }}" alt="vaikų stovyklos nuotrauka">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#Carousel2017" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#Carousel2017" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

        </div>    
    </div>
</div>

@endsection

@section('meta')

    <title>Banglentė - Vasaros dienos stovykla!</title>
    <link rel="canonical" href="https://www.banglente.com/stovykla/">
    <meta name="description" content="Banglenčių dienos stovykla Klaipėdoje, vaikų vasaros stovykla.">
    <meta name="keywords" content="banglenčių stovykla vaikams, vaikų vasaros stovykla, Vaikų banglenčių dienos stovykla klaipėdoje, dienos stovykla, vaikų stovyklos, vaikų stovykla, stovykla prie jūros, banglenčių stovykla, surf camp">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    
@endsection