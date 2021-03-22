@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- SECTION STOVYKLA -------->
<!---------------------------------->
<div class="stovykla section bg-grad">
    <div class="content">    
        <div class="content--scroll">
            <div>
                <h1>Vasaros stovykla 2021</h1>
                <h2>Penktus metus Lietuvoje!</h2>
            </div>
            <div class="lg">
                <div class="lg__info">

                    <div class="content-box">
                        <p>Mes jau penktus metus veikianti banglenčių mokykla Melnragėje.</p>
                        <article>
                            <img src="./img/camp2-300.jpg" class="float-start me-3" alt="vaikų stovykla">
                            <p>Penktus metus organizuojame stovyklas vaikams.</p>
                            <p>Stovykla organizuojama nuo Birželio vidurio iki Rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje. Grupės sudaromos iš 8-10 mokančių plaukti vaikų nuo 10 iki 18 metų.</p>
                            <p>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30), bet galimi ir vienos ar keletos dienų variantai.</p>
                        </article>
                        <p>Stovyklautojam suteikiame visas reikalingas sporto priemones:</p>
                        <article>
                            <img src="./img/camp-300.jpg" class="float-end ms-3" alt="vaikų stovykla">
                            <ul class="my-4">
                                <li>įvairaus dydžio minkštas banglentes;</li>
                                <li>šiltus hidrokostiumus ir esant reikalui batus;</li>
                                <li>"carver", "smoothstar" ir "classic" tipo riedlentes;</li>
                                <li>taip pat išbandysime ir irklentes.</li>
                            </ul>
                            <p class="my-4">Ši savaitinė programa apima tiek teorines, tiek praktines žinias apie jūrą, bangas ir banglentes. Stovykla tinka tiek pirmą kartą atvykstančiam į stovyklą, tiek ir trečią ar ketvirtą. Visi instruktoriai patyrę Klaipėdos gelbėtojai ir ilgametę patirtį turintys banglenčių instruktoriai, bet, svarbiausia, jie žino, kaip padaryti stovyklą nepamirštamu vasaros nuotykiu kiekvienam stovyklos dalyviui.</p>        
                            <p class="pt-4 text-center"><a class="color-white" href="http://www.banglente.com/incoming/programa.pdf" target="_blank">Preliminari programa*</a></p>
                        </article>
                        <article>
                            <p>Pamainos kaina 170€.</p>
                            <p>Vienos dienos kaina 45€.</p>
                            <p>Maitinimas įskaičiuotas</p>
                        </article>
                        <p>Norint užsiregistruoti, reikia užpildyti registracijos formą ir atlikti avansini 30 Eur pavedimą į<br>"VšĮ Banglentė" sąskaitą - LT22 7300 0101 4459 4068 (swed).</p>
                        <p>Visada mielai atsakysime į visus jums kylančius klausimus telefonu. </p>
                    </div>

                    <div class="content-side">
                        <h2>GALERIJA</h2>

                        <!--------- Galerija StovyklaCarousel --------->
                        <div class="carousel">
                            <button class="b-left is-hidden">
                                <img src="./img/left-solid.svg">
                            </button>
                            <div class="track-container">
                                <ul class="carousel-track">
                                    <li class="carousel-slide current-slide">
                                        <img src="http://www.banglente.com/images/camp/1.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/2.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/3.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/4.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/5.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/6.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/7.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/vaikas2.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide current-slide">
                                        <img src="http://www.banglente.com/images/camp/8.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/9.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/10.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/11.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/12.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/13.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/14.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/15.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/16.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/17.jpg" alt="">
                                    </li>
                                    <li class="carousel-slide">
                                        <img src="http://www.banglente.com/images/camp/18.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                            <button class="b-right">
                                <img src="./img/right-solid.svg">
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
                                <li>Daug puikių įspudžių atvirame ore;</li>
                                <li>Teorija apie jūrą, banglentes ir bangas;</li>
                                <li>Užsiėmimai su riedlentėmis;</li>
                                <li>Išvykimas 17:00-17:30 val.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm">
                <img src="http://www.banglente.com/images/vaikas2.jpg">
                <h3>Stovykla organizuojama nuo Birželio vidurio iki Rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje. Grupės sudaromos iš 6-8 mokančių plaukti vaikų nuo 10 iki 18 metų.</h3>
                <h3>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30), bet galimi ir vienos ar keletos dienų variantai.</h3>
                <h3><a href="http://www.banglente.com/incoming/programa.pdf" target="_blank" style="display: initial">Stovyklos preliminari programa čia</a></h3>
                <img src="http://www.banglente.com/images/vaikai.jpg">
                <h2>Pamainos kaina 170 Eurų.</h2>
                <h3>Vienos dienos kaina 45 Eurai.</h3>
                <h3>Maitinimas įskaičiuotas</h3>
                <h2>Norint registruotis užpildykite formą</h2>
                <h3>Mes jau penktus metus veikianti banglenčių mokykla Melnragėje. Ši savaitinė programa apima tiek teorines, tiek praktines žinias apie jūrą, bangas ir banglentes. Visi instruktoriai patyrę Klaipėdos gelbėtojai ir ilgametę patirtį turintys banglenčių instruktoriai, bet, svarbiausia, jie žino, kaip padaryti stovyklą nepamirštamu vasaros nuotykiu kiekvienam stovyklos dalyviui.</h3>
            </div>
        </div>
    </div>
</div>

@endsection