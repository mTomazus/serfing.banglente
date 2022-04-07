@extends('layouts.app')

@section('content')

<!---------------------------------->
<!-------- SECTION GALLERY -------->
<!---------------------------------->
<div class="stovykla section bg-grad">
    <div class="content">    
        <div class="content--scroll">
            <h2 class="my-3">GALERIJA</h2>
            <div class="container d-flex align-items-center flex-wrap bg-white">
                @foreach ($images as $image)
                    <div class="col-3">
                        <div class="m-2">
                            <img class="w-100" src="{{ asset($image) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Banglentė - Nuotraukų galerija</title>
    <link rel="canonical" href="https://www.banglente.com/gallery/">
    <meta name="description" content="Surf nuotraukos">
    <meta name="keywords" content="surf keliones, surf travel, banglenčių stovykla, surf camp">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection