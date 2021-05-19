@extends('layouts.app')

@section('content')

<div class="section bg-grad">
    <div class="content vh-92 d-block">
        <div class="container my-3">        
            <livewire:image-upload />
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Surf galerija</title>
    <meta name="description" content="Banglenčių sporto galerija.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, turgus, skelbimai, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection