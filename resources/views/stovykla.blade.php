@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- SECTION STOVYKLA -------->
<!---------------------------------->
<main class="stovykla section bg-grad">
    <div class="container-lg">

        <div class="title">
            <h1>VAIKŲ VASAROS BANGLENČIŲ STOVYKLA 2023</h1>
            <img class="d-none d-sm-block w-100" src="/img/camp-2023.png" alt="stovyklos koliadzas">
            <img class="d-block d-sm-none" src="/img/camp-2023s.png" alt="stovyklos koliadzas">
            <h2>Dienos stovykla prie jūros</h2>
        </div>

        <div class="grid">

            <div class="apie">
                <h2>APIE MŪSŲ STOVYKLĄ</h2>
                <p>Mes aštuntus metus vaikų vasaros poilsį organizuojanti banglenčių mokykla Melnragėje. Stovykloje dirba patyrę 
                    ir aukštos kvalifikacijos instruktoriai ir treneriai, kurie pasiruošę mokyti ir padėti savo auklėtiniams 
                    išmokti banglenčių sportą nuo pat pradžios.</p>
                <p>Stovykloje vaikai mokomi ne tik praktinių banglenčių mokymosi aspektų, bet ir teorinių žinių apie banglenčių 
                    įrangą, techniką, saugumą vandenyje. Mes taip pat puikiai žinome ir suprantame savo atsakomybę už vaikų 
                    saugumą ir atsakingą banglenčių sporto praktiką, todėl instruktoriai skiria ypatingą dėmesį mokymo procesui, 
                    užtikrinant, kad veikai būtų saugūs ir banglenčių praktika vyktų etiškai ir atsakingai.</p>
                <p>Stovykla yra profesiolaliausia ne tik Lietuvoje, bet visame Baltijos regione ir mūsų auklėtiniai užima tik pačias 
                    aukščiausias tarpautinių banglenčių čempionatų vietas visose grupėse - pernai net turėjome čempionę tarp suaugusiųjų.</p>
                <p>Be to, stovykla orientuota į aplinkos tausojimą ir skatina vaikus rūpintis gamta ir jūros ekosistema.</p> 
            </div>

            <img src="/img/camp-300.jpg" class="rimas" alt="vaikų stovykla">

            <div class="tikslai">
                <h2>Vaikų stovyklos tikslai</h2>
                <ul>
                    <li>Suteikti galimybę vaikams praleisti laiką gamtoje ir išmokti saugiai jaustis šalia vandens telkinių.</li>
                    <li>Suteikti vaikams galimybę išmokti ir veliau tobulinti banglenčių ir riedlenčių sporto įgūdžius.</li>
                    <li>Užtikrinti, kad vaikai turėtų saugią ir priežiūrą užtikrinančią aplinką, kurioje jie galėtų sportuoti ir ugdytis.</li>
                    <li>Suteikti galimybę vaikams patirti bendruomenės dvasią, bendrauti su kitais vaikais ir išmokti bendradarbiauti.</li>
                    <li>Ugdyti atsakomybę, drausmę ir savarankiškumą.</li>
                    <li>Skatinti sveiką gyvenseną ir mitybą, taip pat mokyti gerbti ir rūpintis gamta ir aplinka.</li>
                    <li>Suteikti vaikams  gerų prisiminimų, naujų draugų ir patirties, kuri bus naudinga jų ateities gyvenimui.</li>
                </ul>
            </div>

            <div class="front">
                
                <h2>Stovyklos veiklos</h2>
                <ul>
                    <li>Banglenčių sporto praktiniai užsiėmimai jūroje.</li>
                    <li>Riedlenčių praktiniai mokymai krante.</li>
                    <li>Plaukimas irklente esant tam tinkamoms sąlygoms.</li>
                    <li>Smagus laiko praleidimas paplūdimyje žaidžiant tinklinį, kvadratą ar frisbį.</li>
                    <li>Saugaus elgesio prie vandens mokymai, jūros būkless ir kt.</li>
                    <li>Ekskursijos jūros pakrante pas gelbėtojus.</li>
                    <li>Vizualios medžiagos peržiūros ir jos analizė.</li>
                </ul>
                <a class="color-white btn btn-outline-light" href="/incoming/programa.pdf" target="_blank">Preliminari programa</a>

                <article>
                    <h2>Stovykla suteiks</h2>
                    <p>Maitinimą: pietūs ir užkanžiai su vaisiais.</p>
                    <p>Visą reikalingą sporto inventorių:</p>
                    <ul class="my-4">
                        <li>įvairaus dydžio mokomąsias banglentes;</li>
                        <li>šiltus hidrokostiumus ir esant reikalui batus;</li>
                        <li>"carver", "smoothstar" ir "classic" tipo riedlentes;</li>
                        <li>taip pat ir irklentes.</li>
                    </ul>
                    <p>Daug gerų emocijų.</p>
                </article>

                <article>
                    <h2>Kaip registruotis į stovyklą</h2>
                    <p>Stovykla organizuojama nuo birželio vidurio iki rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje.</p>
                    <P>Grupės sudaromos iš 8-10 mokančių plaukti vaikų nuo 10 iki 18 metų.</P>
                    <p class="">Į pirmas dvi pamainas ir į paskutinę pamainą priimami mokantys plaukti pradinių klasių mokiniai.</p>
                    <p>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30).</p>
                    <p>Norint užsiregistruoti, reikia užpildyti registracijos formą ir atlikti avansini 100 Eur pavedimą į "VšĮ Banglentė" sąskaitą - LT22 7300 0101 4459 4068 (swed). Neatvykus į stovyklą avansas negrąžinamas.</p>
                    <p>Visada mielai atsakysime į visus jums kylančius klausimus telefonu. </p>
                </article>
                
                <h2 class="text-center blink">Pamainos kaina 250€.</h2>
            </div>

            <div class="side">
                <h3>MUS REMIA</h3>
                <h5 class="pb-2">Iš dalies finansuojama Savivaldybės Lėšomis!</h5>
                <section class="d-flex flex-row bg-white w-100 mb-4">
                    <img style="width:25%;margin:auto;box-shadow:none" src="/img/oneill.png" alt="">
                    <img style="width:25%;margin:auto;box-shadow:none" src="/img/klaiped.png" alt="">
                    <img style="width:25%;margin:auto;box-shadow:none" src="/img/kl.jpeg" alt="">
                </section>
               
                <h3>REGISTRACIJA</h3>
                @livewire('stovykla-form')

                <h3>DIENOTVARKĖ</h3>
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
                <div class="atsiliepimai">
                    <h3>ATSILIEPIMAI</h3>
                    <div class="bg-white">
                        <section>
                            <p>Labai šauni STOVYKLA!</p>
                            <div class="vardas d-flex flex-column">
                                <div class="d-inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                </div>
                                <span>Veronika B.</span>
                            </div>
                        </section>
                        <section>
                            <p>Tomai ir komanda, mes labai dėkingi už nuostabias galimybes, suteiktas vaikams!</p>
                            <div class="vardas d-flex flex-column">
                                <div class="d-inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                </div>
                                <span>Julija P.</span>
                            </div>
                        </section>
                        <section>
                            <p>Kaip visada - nerealiai!!! Ačiū už gerą laiką!</p>
                            <div class="vardas d-flex flex-column">
                                <div class="d-inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                </div>
                                <span>Lina P.</span>
                            </div>
                        </section>
                        <section>
                            <p>Rekomenduoju!!!</p>
                            <div class="vardas d-flex flex-column">
                                <div class="d-inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                </div>
                                <span>Milana I.</span>
                            </div>
                        </section>
                        <section>
                            <p>Ačiū Sofijai labai patiko.</p>
                            <div class="vardas d-flex flex-column">
                                <div class="d-inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                </div>
                                <span>Agnė V.</span>
                            </div>
                        </section>
                        <section>
                            <p>Ačiū už gera vaikų poilsį!</p>
                            <div class="vardas d-flex flex-column">
                                <div class="d-inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                                </div>
                                <span>Birutė V.</span>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
      

        <!--- 2022 metu galerija --->
        <div class="gallery">
            <h2>2022 Vaikų vasaros stovykla</h2>
            <div id="Gallery2022" data-bs-toggle="modal" data-bs-target="#Modal2022" class="lg d-flex flex-wrap">
                @foreach (array_values($images22th) as $i => $image22th)
                    <div class="col-3">
                        <img class="w-100" loading="lazy" data-bs-target="#Carousel2022" data-bs-slide-to="{{ $i }}" src="{{ asset($image22th) }}" alt="vaikų stovyklos nuotrauka">
                    </div>
                @endforeach
            </div>
            <div class="modal" id="Modal2022" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">                            
                            <div id="Carousel2022" class="carousel" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach (array_values($images22) as $i => $image22)
                                        <div class="carousel-item @if($i == '0') active @endif">
                                            <img class="d-block w-100" loading="lazy" src="{{ asset($image22) }}" alt="vaikų stovyklos nuotrauka">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#Carousel2022" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next" href="#Carousel2022" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- 2021 metu galerija --->
        <div class="gallery">
            <h2>2021 Vaikų vasaros stovykla</h2>
            <div id="Gallery2021" data-bs-toggle="modal" data-bs-target="#Modal2021" class="lg d-flex flex-wrap">
                @foreach (array_values($images21th) as $i => $image21th)
                    <div class="col-3">
                        <img class="w-100" loading="lazy" data-bs-target="#Carousel2021" data-bs-slide-to="{{ $i }}" src="{{ asset($image21th) }}" alt="vaikų stovyklos nuotrauka">
                    </div>
                @endforeach
            </div>
            <div class="modal" id="Modal2021" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">                            
                            <div id="Carousel2021" class="carousel" data-bs-ride="carousel">
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
        <div class="gallery">
            <h2>2020 Vaikų vasaros stovykla</h2>
            <div id="Gallery2020" data-bs-toggle="modal" data-bs-target="#Modal2020" class="lg d-flex flex-wrap">
                @foreach (array_values($images20th) as $i => $image20th)
                    <div class="col-3">
                        <img class="w-100" loading="lazy" data-bs-target="#Carousel2020" data-bs-slide-to="{{ $i }}" src="{{ asset($image20th) }}" alt="vaikų stovyklos nuotrauka">
                    </div>
                @endforeach
            </div>
            <div class="modal" id="Modal2020" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
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
        <div class="gallery">
            <h2>2019 Vaikų vasaros stovykla</h2>
            <div id="Gallery2019" data-bs-toggle="modal" data-bs-target="#Modal2019" class="lg d-flex flex-wrap">
                @foreach (array_values($images19th) as $i => $image19th)
                    <div class="col-3">
                        <img class="w-100" loading="lazy" data-bs-target="#Carousel2019" data-bs-slide-to="{{ $i }}" src="{{ asset($image19th) }}" alt="vaikų stovyklos nuotrauka">
                    </div>
                @endforeach
            </div>
            <div class="modal" id="Modal2019" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
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
        <div class="gallery">
            <h2>2018 Vaikų vasaros stovykla</h2>
            <div id="Gallery2018" data-bs-toggle="modal" data-bs-target="#Modal2018" class="lg d-flex flex-wrap">
                @foreach (array_values($images18th) as $i => $image18th)
                    <div class="col-3">
                        <img class="w-100" loading="lazy" data-bs-target="#Carousel2018" data-bs-slide-to="{{ $i }}" src="{{ asset($image18th) }}" alt="vaikų stovyklos nuotrauka">
                    </div>
                @endforeach
            </div>
            <div class="modal" id="Modal2018" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
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
        <div class="gallery">
            <h2 class="m-2">2017 Vaikų vasaros stovykla</h2>
            <div id="Gallery2017" data-bs-toggle="modal" data-bs-target="#Modal2017" class="lg d-flex flex-wrap">
                @foreach (array_values($images17th) as $i => $image17th)
                    <div class="col-3">
                        <img class="w-100" loading="lazy" data-bs-target="#Carousel2017" data-bs-slide-to="{{ $i }}" src="{{ asset($image17th) }}" alt="vaikų stovykla">
                    </div>
                @endforeach
            </div>
            <div class="modal" id="Modal2017" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Stovykla 2017</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                            
                            <div id="Carousel2017" class="carousel" data-bs-ride="carousel">
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
</main>

<style>
    .grid {
        display: grid;
        grid-template-columns: 20% 20% 20% 20% 20%; 
        gap: 0rem;
        grid-template-areas:
            "apie apie apie atsiliepimai atsiliepimai"
            "rimas tikslai tikslai tikslai tikslai" 
            "front front front side side";
        margin-bottom: 2rem;
        align-items: center;
    }
    .grid > div {
        margin-bottom: 1rem;
    }
    .apie {
        grid-area: apie;
    }
    .tikslai {
        grid-area: tikslai;
    }
    .atsiliepimai {
        grid-area: atsiliepimai;
    }
    .atsiliepimai section {
        padding: 1rem;
        border-bottom: solid 1px;
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .atsiliepimai p {
        width: 65%;
        font-size: 1rem;
        color: black;
        text-align: left;
        margin: 0;
        padding: 0;
    }
    .atsiliepimai span {
        text-align: right;
        font-size: 0.75rem;
    }
    .atsiliepimai svg {

    }
    .front {
        grid-area: front;
    }
    .side {
        grid-area: side;
    }
    .rimas  {
        grid-area: rimas;
    }
    h3 {
        background-image: linear-gradient(to right, #2f78a8, #114161);
        padding: 0;
        margin-bottom: 1rem;
    }
    .grid h2 {
        text-transform: uppercase;
        text-align: left;
        margin-top: 1rem;
    }
    main p, main li {
        font-size: 1.25rem;
        line-height: 1.5rem;
        text-align: left;
        font-family: alegreya;
        font-weight: 900;
        color: white;
        text-shadow: none;
        margin-top: 1rem;
        padding: 0 1rem;
        max-width: 100%;
    }
    main p::first-letter {
        font-size: 150%;
    }
    .title {
        max-height: initial;
    }
    .modal-body {
        padding: 0px!important;
    }
    .carousel a {
        width: 10%!important;
    }
    .gallery {
        padding-right: var(--bs-gutter-x,.75rem);
        padding-left: var(--bs-gutter-x,.75rem);
    }

    @media screen and (max-width: 1199px) {
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
            gap: 1rem;
            grid-template-areas:
            "apie apie atsiliepimai"
            "rimas tikslai tikslai " 
            "front front front"
            "side side side";
            margin-bottom: 2rem;
            align-items: center;
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
        .stovykla a {
            display: grid;
            width: 80%;
            margin: auto;
        }
        .vardas {
            margin-right: 0;
            margin-left: auto;
        }
        .atsiliepimai p {
            width: 100%;
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
        main h3 {
            margin: 0.5rem 0;
            max-width: 100%;
            font-size: 1.25rem!important;
            font-weight: 900!important;
            padding: 0.5rem;
        }
        .title h1 {
            font-size: 3rem;
        }
        .title h2 {
            font-size: 1.125rem
        }
        .vardas {
            align-items: end;
        }
        .atsiliepimai section {
            flex-direction: column;
        }
        .atsiliepimai p {
            width: 100%;
        }
    }
</style>

@endsection

@section('meta')

    <title>Banglentė - Vaikų vasaros dienos stovykla 2023!</title>
    <link rel="canonical" href="https://www.banglente.com/vaiku-stovykla/">
    <meta name="description" content="Vaikų vasaros stovykla 2023 Klaipėdoje. Ant bangos 2023.">
    <meta name="keywords" content="banglenčių stovykla vaikams, vaikų vasaros stovykla 2023, Vaikų banglenčių dienos stovykla Klaipėdoje, dienos stovykla, vaikų stovyklos, vaikų stovykla, stovykla prie jūros, banglenčių stovykla, surf camp">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection