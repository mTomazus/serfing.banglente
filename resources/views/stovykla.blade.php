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
                        <p>Stovykla organizuojama nuo Birželio vidurio iki Rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje. Grupės sudaromos iš 6-8 mokančių plaukti vaikų nuo 10 iki 18 metų.</p>
                        <p>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30), bet galimi ir vienos ar keletos dienų variantai.</p>
                        <section>
                            <p>Pamainos kaina 170€.</p>
                            <p>Vienos dienos kaina 45€.</p>
                            <p>Maitinimas įskaičiuotas</p>
                        </section>
                        <section>
                            <p>Pamainos kaina 170€.</p>
                            <p>Vienos dienos kaina 45€.</p>
                            <p>Maitinimas įskaičiuotas</p>
                        </section>
                        <p>Mes jau penktus metus veikianti banglenčių mokykla Melnragėje. Ši savaitinė programa apima tiek teorines, tiek praktines žinias apie jūrą, bangas ir banglentes. Visi instruktoriai patyrę Klaipėdos gelbėtojai ir ilgametę patirtį turintys banglenčių instruktoriai, bet, svarbiausia, jie žino, kaip padaryti stovyklą nepamirštamu vasaros nuotykiu kiekvienam stovyklos dalyviui.</p>        
                    </div>
                    <div class="content-side">
                        <h2>GALERIJA</h2>
                        <img src="http://www.banglente.com/images/vaikas2.jpg">
                        <h2>REGISTRACIJA</h2>
                        <div class="bg-white mb-4">
                            <form id="stovykla--form" class="col-11 m-auto" action="" method="post" novalidate="">
                                <div class="input-group p-3">
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="pamaina">Stovyklos pamaina</label>
                                    </div>
                                    <select class="custom-select" name="pamaina" id="pamaina">
                                        <option>1. Birželio 14d.	- Birželio 18d.</option>
                                        <option>2. Birželio 21d.	- Birželio 25d.</option>
                                        <option>3. Birželio 28d. -	Liepos 2d.</option>
                                        <option>4.	Liepos 5d. -	Liepos 9d.</option>
                                        <option>5. Liepos 12d.	- Liepos 16d.</option>
                                        <option>6. Liepos 19d. -	Liepos 23d.</option>
                                        <option>7. Rugpjūčio 2d. -	Rugpjūčio 6d.</option>
                                        <option>8. Rugpjūčio 9d. -	Rugpjūčio 13d.</option>
                                        <option>9. Rugpjūčio 16d. -	Rugpjūčio 20d.</option>
                                        <option>10.	Rugpjūčio 23d. - Rugpjūčio 27d.</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Vardas">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Pavardė">
                                    </div>
                                </div>
                                <input class="form-control mb-3" type="text" placeholder="Gyvenamoji vieta" aria-label="default input example">
                                <div class="row mb-3 justify-content-around">
                                    <div class="input-group w-auto">
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="metai" aria-describedby="metai">Metai</label>
                                        </div>
                                        <select class="custom-select" name="metai" id="metai">
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option selected="selected">13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                        </select>
                                    </div>
                                    <div class="input-group w-auto">
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="plaukti" aria-describedby="plaukti">Plaukia:</label>
                                        </div>
                                        <select class="custom-select" name="plaukti" id="plaukti">
                                            <option>Labai gerai</option>
                                            <option>Gerai</option>
                                            <option>Silpnai</option>
                                            <option>Nemoka plaukti</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="text" name="alergija" aria-describedby="alergija" placeholder="Ar alergiškas ir kam ?" required="">
                                </div>                    
                                <input class="form-control mb-3" type="email" name="email" aria-describedby="emailHelp" placeholder="Elektroninis paštas" required="">
                                <input type="tel" class="form-control mb-3" name="phone" aria-describedby="phoneHelp" placeholder="Telefono numeris" maxlength="14" required="">
                                <div class="pb-3">
                                    <button type="reset" class="btn btn-secondary col-5" data-dismiss="modal">Išvalyti</button>
                                    <button id="submitButton" type="submit" name="submit" class="btn btn-primary col-5" >Registruoti</button>
                                </div>
                            </form>
                        </div>
                        <h2>PARSISIŲSTI</h2>
                        <h3><a class="link" href="http://www.banglente.com/incoming/programa.pdf" target="_blank" style="display: initial">Stovyklos preliminari programa</a></h3>
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
                <h2><a href="#">Norint registruotis užpildykite šią anketa</a></h2>
                <h3>Mes jau penktus metus veikianti banglenčių mokykla Melnragėje. Ši savaitinė programa apima tiek teorines, tiek praktines žinias apie jūrą, bangas ir banglentes. Visi instruktoriai patyrę Klaipėdos gelbėtojai ir ilgametę patirtį turintys banglenčių instruktoriai, bet, svarbiausia, jie žino, kaip padaryti stovyklą nepamirštamu vasaros nuotykiu kiekvienam stovyklos dalyviui.</h3>
            </div>
        </div>
    </div>
</div>

@endsection