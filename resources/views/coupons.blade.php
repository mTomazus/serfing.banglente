@extends('layouts.app')

@section('content')

<div class="section bg-grad">
    <div class="content vh-92 d-block">
        <h1>KUPONAI</h1>
        <div class="d-flex lg my-4">
            <div class="content-box">
                <h2 class="shadow">KUPONAI</h2>
            </div>
            
            <div class="content-side">
                    
                <h2 class="shadow">NAUJAS KUPONAS</h2>
                <div class="container my-3">        
                    <livewire:coupon-form />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Kuponai</title>
    <meta name="description" content="Banglenčių sporto dovanų kuponai.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, turgus, skelbimai, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection