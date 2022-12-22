@extends('layouts.app')

@section('content')

<div class="bg-grad">
    <div class="content burelis section">
        <div class="col-12">
            <h1>Prognozės</h1> 
        </div>
        <div class="container row m-auto justify-content-around">
            <div class="col-4">
                <h2>Vandens temperatūra</h2>
                <img width="100%" src="https://a.nordicweather.net/maps/water.png">
            </div>
            <div class="col-4">
                <h2>Vėjo prognozė</h2>
                <iframe width="100%" height="429" src="https://embed.windy.com/embed2.html?lat=55.479&amp;lon=20.742&amp;zoom=5&amp;level=surface&amp;overlay=wind&amp;menu=&amp;message=true&amp;marker=&amp;calendar=now&amp;pressure=true&amp;type=map&amp;location=coordinates&amp;detail=&amp;detailLat=55.282&amp;detailLon=13.590&amp;metricWind=m%2Fs&amp;metricTemp=%C2%B0C&amp;radarRange=-1" frameborder="0"></iframe> 
            </div>
        </div>
        
                

    </div>
</div>    
@endsection

@section('meta')
    
    <title>Banglentė - banglenčių nuoma, irklenčių nuoma ir hidrokostiumų nuoma</title>
    <link rel="canonical" href="https://www.banglente.com/nuoma/">
    <meta name="description" content="Banglenčių nuoma, surf rent, rent, irklenčių nuoma ir riedlentės">
    <meta name="keywords" content="banglenčių nuoma, irklenčių nuoma, bodyboardai, surfboard rental, hidrokostiumų nuoma, wetsuits rental, rent surf, hidrokostiumai, riedlentės, nuoma, klaipeda, surfer">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>

@endsection