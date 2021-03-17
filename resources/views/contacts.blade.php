@extends('layouts.app')

@section('content')

    <!----------------------------------->
    <!-------- Sekcija KONTAKTAI -------->
    <!----------------------------------->

    <div class="content section contacts-page">
        <div class="contacts__content bg-grad">
            <div>
                <h3 class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsa rerum distinctio, non voluptatum qui enim veritatis?
                At autem deserunt exercitationem consequatur.</h3>
            </div>
            <div class="menu">
                <a href="#">karjera</a>
                <a href="#">parama</a>
                <a href="#">ataskaitos</a>
                </ul>
            </div>
            <div class="rekvizitai">
                <img class="elastic" src="/img/naujas-title.png" alt="banglente logo">
                <h2>VšĮ Banglentė</h2>
                <h2>Vėtros g. 8, Klaipėda</h2>
                <h2>Įmonės kodas - 304105037</h2>
                <h2>Bankas - LT227300010144594068</h2>
            </div>
            @livewire('contact-form')
        </div>
    </div>
@endsection