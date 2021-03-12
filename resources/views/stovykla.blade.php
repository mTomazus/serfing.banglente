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
                        <h3>Stovykla organizuojama nuo Birželio vidurio iki Rugpjūčio pabaigos, grupės yra riboto dydžio, todėl skambinkite arba registruokites dabar, kad gautumėte vietą norimoje pamainoje. Grupės sudaromos iš 6-8 mokančių plaukti vaikų nuo 10 iki 18 metų.</h3>
                        <h3>Pamaina trunka 5 dienas nuo pirmadienio iki penktadienio (nuo 9:00 iki 17:30), bet galimi ir vienos ar keletos dienų variantai.</h3>
                    </div>
                    <div class="content-side">
                        <img src="http://www.banglente.com/images/vaikas2.jpg">
                        <div>
                            <form id="myForm" action="" method="post" novalidate="">
                                <div class="form-group">
                                    <label for="pamaina">Norima stovyklos pamaina</label>
                                    <select class="col-sm-10" name="pamaina">
                                        <option disabled="">1. --Baigėsi--</option>
                                        <option disabled="">2. --Baigėsi--</option>
                                        <option disabled="">3. --Baigėsi--</option>
                                        <option disabled="">4.	--Baigėsi--</option>
                                        <option disabled="">5. --Baigėsi--</option>
                                        <option disabled="">6. --Pamaina pilna--</option>
                                        <option disabled="">7. --Pamaina pilna--</option>
                                        <option disabled="">8. --Pamaina pilna--</option>
                                        <option disabled="">9.	--Pamaina pilna--</option>
                                        <option>10.	Rugpjūčio 24d. - Rugpjūčio 28d.</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Vardas">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Pavardė">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 form-label" for="metai" aria-describedby="metai">Metai</label>
                                    <select  class="col-sm-9" name="metai" id="metai">
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
                                <div class="form-group">
                                    <input class="form-control" type="text" name="alergija" aria-describedby="alergija" placeholder="Ar alergiškas ir kam ?" required="">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="plaukti">
                                        <option>Labai gerai plaukia</option>
                                        <option>Gerai plaukia</option>
                                        <option>Silpnai plaukia</option>
                                        <option>Nemoka plaukti</option>
                                    </select>
                                </div>
                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                <small class="form-text">Globėjų kontaktai</small>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" aria-describedby="emailHelp" placeholder="Elektroninis paštas" required="">
                                    <input style="width:200px;margin:1rem auto;" type="tel" class="form-control" name="phone" aria-describedby="phoneHelp" placeholder="Telefono numeris" maxlength="14" required="">
                                </div>
                                <div class="form-control" style="margin:0;height:auto">
                                    <button type="reset" class="btn btn-secondary col-5" data-dismiss="modal" style="margin:10px 0;">Išvalyti</button>
                                    <button id="submitButton" type="submit" name="submit" class="btn btn-primary col-5" style="margin:10px 0;float:right;">Registruoti</button>
                                </div>
                            </form>
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
                <h2><a href="#">Norint registruotis užpildykite šią anketa</a></h2>
                <h3>Mes jau penktus metus veikianti banglenčių mokykla Melnragėje. Ši savaitinė programa apima tiek teorines, tiek praktines žinias apie jūrą, bangas ir banglentes. Visi instruktoriai patyrę Klaipėdos gelbėtojai ir ilgametę patirtį turintys banglenčių instruktoriai, bet, svarbiausia, jie žino, kaip padaryti stovyklą nepamirštamu vasaros nuotykiu kiekvienam stovyklos dalyviui.</h3>
            </div>
        </div>
    </div>
</div>

@endsection