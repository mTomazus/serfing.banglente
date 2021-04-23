@extends('layouts.app')

@section('content')

<div class="section bg-grad">
    <div class="content vh-92 d-block">
        <div class="container">
            <h1>{{ $post->title }}</h1>
            <article class="bg-white">
                <h3>Kaina {{ $post->price }} Eur</h3>
                <div>
                    {{ $post->body }}
                </div>
                
                <div class="d-block btn-group m-2 p-2">
                    <a href="/skelbimai/" class="btn btn-outline-secondary btn-sm">Back</a>
                    @if (Auth::user() && Auth::user()->id == $post->user_id)
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                            
                            {!! Form::open(['action' => ['App\Http\Controllers\User\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger']) }}
                            {!! Form::close() !!}
                    @endif
                </div>    
                <small class="m-2 d-block">Sukurta {{ $post->created_at }}</small>
                
            </article>
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Skelbimas - {{ $post->title }}</title>
    <meta name="description" content="Banglenčių ir kito surf equipmento turgelis.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, turgus, skelbimai, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection