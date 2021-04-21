@extends('layouts.app')

@section('content')

<div class="section bg-grad">
    <div class="content d-block">
        <h1>Skelbimai</h1>
        
        <div class="col-lg-6 col-md-8 mx-auto">
            <div class="mx-auto">
                {{ $posts->links() }}
            </div>
        </div>
  
        <div class="album py-2">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @if(count($posts) > 0)

                        @foreach ($posts as $post)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                    <h5 class="fw-bold mt-3 ms-3 h5 card-text">{{ $post->title }}</h5>
                                    <h6 class="h6 ms-3 my-0 card-text">Kaina {{ $post->price }} Eur</h6>
                                    <div class="card-body">
                                        <h5 class="h6 card-text">{{ $post->body }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="/skelbimai/{{ $post->id }}"><button type="button" class="btn btn-sm btn-outline-primary">View</button></a>
                                            </div>
                                            <small class="text-muted">Sukurta {{ $post->created_at }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <p> no postst found </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="mx-auto">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Banglentė - skelbimų lenta</title>
    <meta name="description" content="Banglenčių ir kito surf equipmento turgelis.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, turgus, skelbimai, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection