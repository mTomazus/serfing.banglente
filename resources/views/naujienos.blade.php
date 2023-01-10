<!-------------------------------------------------------------->
<!------------------- STRAIPSNIAI SECTION ---------------------->
<!-------------------------------------------------------------->

@extends('layouts.app')

@section('content')

<main class="bg-grad section">
<!------------------------- TITLE ------------------------------>

    <div class="title">
        <h1>Straipsniai</h1>
    </div>

<!------------------------- WRAP ------------------------------>

    <div class="container-md flex-md-row my-4 align-items-start">
        <div class="row"> 

<!-------------------------- MAIN ------------------------------>     

            <div class="col-md-8">
                <div class="position-relative">
                    <img src="/img/article/aipa.jpg" class="w-100 pic">
                    <div class="krta mb-4" style="position: absolute; margin:auto; bottom:0px">
                        <h2>Banglentes</h2>
                        <h4>Kaip jos veikia?</h4>
                        <h5>I dalis</h5>                        
                    </div>
                    <a href="/straipsniai/1" class="stretched-link"></a>
                </div>
            </div>

<!-------------------------- SIDE ------------------------------>        
            
            <div class="col-md-4">
                <div class="position-relative">
                    <img src="https://www.skidock.com/wp-content/uploads/2022/03/AdobeStock_244993930.jpeg" class="w-100 pic">
                    <div class="krta mb-4">
                        <h2>Hidrokostiumai</h2>
                        <h4>Ką reikia žinoti!</h4>                        
                    </div>
                    <a href="/straipsniai/2" class="stretched-link"></a>
                </div>
            </div>

<!--------------------------------------------------------------->

        </div>
    </div>    
</main>

@endsection

@section('meta')

    <title>Lietuvos banglenčių sporto naujienos!</title>
    <link rel="canonical" href="https://www.banglente.com/naujienos/">
    <meta name="description" content="Banglenčių sporto naujienos Lietuvoje ir pasaulyje, straipsniai.">
    <meta name="keywords" content="banglenčių sporto naujienos, naujienos, straipsniai">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    
@endsection