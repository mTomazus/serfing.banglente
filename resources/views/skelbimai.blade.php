@extends('layouts.app')

@section('content')

<div class="section bg-grad skelbimai vh-92">
    <div class="content d-block">
        <h1 class="">SKELBIMAI</h1>

        @auth
        @endauth
            <div class="col-lg-6 col-md-8 mb-3">
                <div class="text-center">
                    <a href="{{ URL::to('/posts/create') }}" class="btn btn-sm btn-primary my-2">Naujas skelbimas</a>
                    <a href="#" class="btn btn-sm btn-secondary my-2">Secondary action</a>
                </div>
            </div> 
        
        <div class="section">
            <div class="container d-flex">
                <div class="col-12 col-md-7">

                    @if(count($posts) > 0)

                        @foreach ($posts as $post)
                            
                        <div class="bg-white col-12 mb-3 d-flex flex-row rounded overflow-hidden h-160 h-120p">
                            <div class="col-8 col-md-9 p-lg-2 pb-2 d-flex flex-column position-static">
                                <div class="bg-def d-none d-md-inline-block px-5 mb-1">
                                    <strong class="float-start text-white fw-bold">{{ $post->category }}</strong>
                                    <small class="float-end text-white">{{ $post->created_at }}</small>
                                </div>
                                <div class="d-flex mt-2 mt-md-0">
                                    <h4 class="col-9 my-md-0 mb-0 text-start ps-3 fw-bold clip" style="max-height: 30px;">{{ $post->title }}</h4>
                                    <strong class="col-3 float-end float-end px-md-3 text-center text-success">{{ $post->price }} €</strong>
                                </div>
                                <hr class="d-none d-md-block m-0">
                                <h4 class="h6 mx-2 my-md-auto ms-md-3 clip text-start mb-auto clip" style="max-height: 40px;">{{ $post->body }}</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="ms-2 ms-md-0 btn-group">
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

                            <div class="col-4 col-md-3 d-md-flex p-0 m-0 justify-content-around">
                                <img src="{{ asset('user_images/' . $post->image_1) }}" class="h-100 w-100" height="200px" width="150px">
                            </div>

                        </div>
    
                        @endforeach

                    @else
                        <p> no posts found </p>
                    @endif
                </div>
                <div class="col-md-5 d-md-block d-none">
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