@extends('layouts.admin')

@section('content')

    <main class="bg-grad section">
        <div class="container-lg">
            
            <div class="d-block m-4">
                <a href="{{ route('products.index') }}" class="btn btn-primary">BACK</a>
            </div>

            <div class="d-grid">
                <h1>{{ $product->name }}</h1>
                <h3>{{ $product->description }}</h3>
                <h3>{{ $product->details }}</h3>

                @if (count($product->images)>0)
                    @foreach ($product->images as $img)
                        <img width="100%" src="/{{ $img->url }}" alt="product image">
                    @endforeach
                @endif
            </div>

        </div>
    </main>
    <style>
        .d-grid {
            grid-template-columns: 1fr 1fr 1fr;
        }
    </style>
    
@endsection

@section('meta')

    <title>Banglentė - admin panel - kontaktų forma</title>
    <meta name="description" content="Griebiam banglentes ir į bangas, išsinuomuok banglente , SUPą Klaipėdoje ir Melnragėje, banglenčių mokykla.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection