@extends('layouts.app')

@section('content')

<!--------------------------------->
<!-------- SECTION PAMOKOS -------->
<!--------------------------------->

<div class="s2 section">
    <div class="content pamokos bg-grad">
        <div>
            <h1>PAMOKOS</h1>
        </div>
        <div class="lg">
            <div class="lg__info">
                <div class="content-box">
                    <div>
                        <h3>PAMOKŲ PAKETAS</h3>
                        <h4>120€</h4>
                        <h4>Pakete dvi 1h trukmės pamokos, pirmoje pamokoje ramiame vandenyje išmokstam irklavimo, atsistojimo techniką ir balanso ant lentos. Antroje pamokoje jau bangose - pozicionavimą ir technikos tolimesnis įsisavinimas praktikoje.</h4>
                    </div>
                    <div>
                        <h3>PRIVATI PAMOKA</h3>
                        <h4>70€</h4>
                        <h4>Per šią pusantros valandos privačią serfingo pamoką pristatysime Jums etiketo, saugumo, serfingo pagrindus, irklavimo techniką, pozicionavimą bangose bei atsistojimo būdus.</h4>
                    </div>
                    <div>
                        <h3>GRUPINĖ</h3>
                        <h4>30€</h4>
                        <h4>Idealiai tinka pradedantiesiems ar tiems, kurie nori prisiminti pagrindus ir techniką. Pamoka kartu su mumis reiškia, kad mokotės iš geriausių, kad galėtumėte tapti geriausiais.</h4>
                    </div>
                    <div>
                        <h3>PAMOKA DVIEM</h3>
                        <h4>90€</h4>
                        <h4>Geriausiai tinka 2 asmenims - draugams ar draugėms, poroms ar artimiesiems. Čia mes pristatysime Jums saugumo ir serfingo pagrindus, irklavimo techniką bei atsistojimo būdus.</h4>
                    </div>
                    <div>
                        <h3>KOMANDOS FORMAVIMAS</h3>
                        <h4>nuo 200€</h4>
                        <h4>Subūrėte didelę grupę nuo 6 iki 12 žmonių, kuri norėtų išbandyti save bangose? Pabūti kartu, patirti geras emocijas bei palaikyti vienas kitą? Tai tinkamiausias pasirinkimas jums!</h4>
                    </div>
                    <div>
                        <h3>INDIVIDUALI PLUS</h3>
                        <h4>120€</h4>
                        <h4>Ši serfingo pamoka tinka tiek naujokams tiek pažengusiems ir su orientuocija į pastioviai daromas esmines klaidas ir kilstelėtų Jūsų techniką į naują lygį. Jei ieškote vertos pamokos - Jūs ją radote.</h4>
                    </div>
                </div>
                <div class="content-side">
                    <h2>GALERIJA</h2>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9qf0R2BWUFsOK0iRbC804I4PE_hDu49riVg&usqp=CAU" alt="">
                    </div>
                    <h2>DOVANŲ KUPONAS</h2>
                    <div class="kuponas">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="opacity: 1; transform: translate(0px, 0px);float: right;"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="opacity: 1; transform: translate(0px, 0px);float: right;"><path d="M12 6.76l1.379 4.246h4.465l-3.612 2.625 1.379 4.246-3.611-2.625-3.612 2.625 1.379-4.246-3.612-2.625h4.465l1.38-4.246zm0-6.472l-2.833 8.718h-9.167l7.416 5.389-2.833 8.718 7.417-5.388 7.416 5.388-2.833-8.718 7.417-5.389h-9.167l-2.833-8.718z"></path></svg>
                        <h3>DOVANŲ KUPONAS</h3>
                        <h4>nuo 30€</h4>
                        <h4>Galioja metus, puiki dovana draugui ar kolegai. Galimi įvairus variantai, nuo grupinės pamokos iki individualios ar net kelių pamokų paketų</h4>
                    </div>
                    <h2>REGISTRACIJA</h2>
                    <form class="pamokos-form"> 
                        <div class="row align-items-center wi-80">
                            <div>
                                <select class="form-select" name="pamoka">
                                    <option selected="Pasirinkti">pasirinkite jūs dominančią paslaugą...</option>
                                    <option value="pamokų paketas">Pamokų paketas</option>
                                    <option value="privati pamoka">Privati pamoka</option>
                                    <option value="grupinė pamoka">Grupinė pamoka</option>
                                    <option value="pamoka dviem">Pamoka dviem</option>
                                    <option value="individuali plius">Individuali +</option>
                                </select>                          
                            </div>
                        </div>
                        <div class="input-group wi-80">
                            <span class="input-group-text" id="basic-addon3">pageidaujama data nuo...</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="2021-06-22">
                        </div>
                        <div class="row">
                            <div class="col">
                              <input type="text" name="name" class="form-control" placeholder="Vardas" aria-label="First name" required>
                            </div>
                            <div class="col">
                              <input type="text" name="surname" class="form-control" placeholder="Pavardė" aria-label="Last name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="address" class="form-control" id="zip" placeholder="Adresas" required>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-5">
                                <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="Telefono numeris" required="">
                       
                            </div>
                            <div class="col-7">
                                <input type="text" name="el. paštas" id="floatingInput" class="form-control" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Elektroninis paštas">
       
                            </div>
                        </div>
                        <div class="form-check form-switch col-10">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</label>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">REGISTRUOTI</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <section class="akordionas sm">
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
        <section class="akordionas sm">
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
</div>    <!--- end SECTION 2  --->

@endsection