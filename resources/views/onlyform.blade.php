@extends('layouts.app')

@section('content')

    <div class="my-auto d-block py-3">
        <img class="mx-auto d-block" style="width:200px" src="/img/naujas-title.png" alt="banglente logo">
        <h2 class="text-dark mt-2">2022 Vasaros stovyklos registracija</h2>
    </div>

    <div class="col-12 mx-auto">
        @livewire('stovykla-form')
    </div>

    <h2 class="mt-4 text-dark">VšĮ Banglentė</h2>
    <h2 class="text-dark">Vėtros g. 8, Klaipėda</h2>
    <h2 class="text-dark">Įmonės kodas - 304105037</h2>
    <h2 class="text-dark">Bankas - LT227300010144594068</h2>
           
@endsection

@section('scripts')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection