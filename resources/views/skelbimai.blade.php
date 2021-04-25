@extends('layouts.app')

@section('content')

<div class="section bg-grad skelbimai vh-92">
    <div class="content d-block">
        <h1 class="">Skelbimai</h1>

        @auth
        @endauth
            <div class="col-lg-6 col-md-8 mx-auto">
                <div class="text-center">
                    <a href="{{ URL::to('/posts/create') }}" class="btn btn-sm btn-primary my-2">Naujas skelbimas</a>
                    <a href="#" class="btn btn-sm btn-secondary my-2">Secondary action</a>
                </div>
            </div> 
        
        <div class="col-lg-6 col-md-8 mx-auto">
            <div class="mx-auto">
                {{ $posts->links() }}
            </div>
        </div>
  
        <div class="section">
            <div class="container d-flex">
                <div class="col-12 col-md-8">

                    @if(count($posts) > 0)

                        @foreach ($posts as $post)
                            
                        <div class="bg-white col-12 mb-3 d-flex flex-row rounded overflow-hidden h-200 h-120p">
                            <div class="col-8 col-md-10 p-lg-2 pb-2 d-flex flex-column position-static">
                                <strong class="bg-def d-none d-md-inline-block px-5 mb-2 text-start text-info">{{ $post->category }}</strong>
                                <h4 class="my-1 my-md-0 mb-0 text-start ms-3 fw-bold">{{ $post->title }}<strong class="float-end mx-3 text-success">{{ $post->price }} €</strong></h3><hr class="d-none d-md-block m-0">
                                <div class="d-none d-md-block mb-1 ms-3 text-start text-muted"><small>{{ $post->created_at }}</small></div>
                                <h4 class="h6 mx-2 m-1 ms-md-5 text-start mb-auto clip">{{ $post->body }}</h4>
                                <div class="ms-2 d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/skelbimai/{{ $post->id }}"><button type="button" class="btn btn-sm btn-outline-primary">View</button></a>
                                        @if (Auth::user() && Auth::user()->id == $post->user_id)
                                            <a href="/posts/{{ $post->id }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                            {!! Form::open(['action' => ['App\Http\Controllers\User\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                            {!! Form::close() !!}
                                        @elseif (Auth::user() && Auth::user()->type == 'admin')
                                            <a href="/posts/{{ $post->id }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                            {!! Form::open(['action' => ['App\Http\Controllers\User\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                            {!! Form::close() !!}
                                        @endif
                                    </div>
                                    <div>
                                    </div>
                                </div>    
                            </div>

                            <div class="col-4 col-md-2 d-md-flex p-0 m-0 justify-content-around">
                                <img src="{{ asset('user_images/' . $post->image_1) }}" class="h-100 w-100" height="200px" width="150px">
                            </div>

                        </div>
    
                        @endforeach

                    @else
                        <p> no posts found </p>
                    @endif
                </div>
                <div class="col-md-4 d-md-block d-none">
                    <h2 class="mx-3 bg-def">CHATAS</h2>
                    @livewire('chat-form')
                
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