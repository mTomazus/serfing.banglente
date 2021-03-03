@extends('layouts.app')

@section('content')

<div class="content nuoma bg-gradient">
    <h1>NUOMA</h1>         
    <h2>Didžiausias pasirinkimas!</h2>
    <!--------- Carousel --------->
    <div class="carousel banglentes">
        <button class="b-left is-hidden">
            <img src="./img/left-solid.svg" alt="banglentes - left">
        </button>
        <div class="track-container">
            <ul class="carousel-track">
                <li class="carousel-slide current-slide">
                    <h3>BANGLENTĖS</h3>
                    <img src="./img/lenta-9.jpg" alt="banglentes nuoma">
                    <div class="info">
                        <h4>pradedantiesiems</h4>
                        <h4>10 eur - 2 val.</h4>
                        <h4>20 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide current-slide">
                    <h3>HIDROKOSTIUMAI</h3>
                    <img src="./img/lenta-1.jpg" alt="hidrokostiumai vyriski moteriski">
                    <div class="info">
                        <h4>stori - 5/4 mm.</h4>
                        <h4>5 eur - 2 val.</h4>
                        <h4>10 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <h3>IRKLENTĖS</h3>
                    <img src="./img/lenta-2.jpg" alt="irklentes - sup'ai">
                    <div class="info">
                        <h4>kietos nuo 10"</h4>
                        <h4>10 eur - 1 val.</h4>
                        <h4>40 eur - diena</h4>
                    </div>
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-3.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-4.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-5.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-6.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-7.jpg" alt="">
                </li>
                <li class="carousel-slide">
                    <img src="./img/lenta-8.jpg" alt="">
                </li>
            </ul>
        </div>
        <button class="b-right">
            <img src="./img/right-solid.svg" alt="irklentes - right">
        </button>
    </div> <!----- END Carousel END ----->
</div> 
@endsection