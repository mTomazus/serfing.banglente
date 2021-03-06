@extends('layouts.user')

@section('content')

<div class="section bg-grad">
    <div class="content vh-100 d-block">
        <div class="container mt-3">
            <div class="border mt-lg-5 col-lg-8 mx-auto">
                <h1 class="">Redaguoti skelbimą</h1>
                @if ($errors->any())
                    <ul class="col-lg-10 m-auto">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <li><strong>Danger!</strong>{{ $error }}</li>
                            </div>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['action' => ['App\Http\Controllers\User\PostsController@update', $post->id], 'method' => 'POST' ]) !!}
                    <div class="px-3 p-1">
                        {{ Form::label('title', 'Antraštė', ['class' => 'form-label']) }}
                        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Pora žodžių...']) }}
                    </div>
                    <div class="px-3 p-1">
                        {{ Form::label('body', 'Trumpa info', ['class' => 'form-label']) }}
                        {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Apie 20 žodžių...', 'rows' => "3"]) }}
                    </div>
                    <div class="px-3 p-1">
                        {{ Form::label('price', 'Kaina', ['class' => 'form-label']) }}
                        {{ Form::text('price', $post->price, ['class' => 'form-control', 'placeholder' => '150 eur...']) }}
                    </div>
                    <div class="px-3 p-1 col-6">
                        {{ Form::label('phone', 'Telefono numeris', ['class' => 'form-label']) }}
                        {{ Form::text('phone', $post->phone, ['class' => 'form-control', 'placeholder' => '+370 6xx xxxxx']) }}
                    </div>
                    <div class="px-3 mb-3 p-1">
                        {{ Form::label('category', 'Įrangos kategorija', ['class' => 'form-label']) }}
                        {{ Form::select('category', ['Surf' => 'Surfboards', 'Kite' => 'Kite', 'Wetsuit' => 'Wetsuits', 'Skate' => 'Skateboards', 'Wind' => 'Wind', 'Kita' => 'Kita'], 'Pasirenkam..', ['class' => 'form-select']) }}
                    </div>
                    <div class="px-3 mb-3 p-1">
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Submit', ['class' => 'mb-2 btn btn-sm btn-primary']) }}
                    </div>
                {!! Form::close() !!}
                
                </div>
        </div>
    </div>
</div>

@endsection

@section('meta')

    <title>Skelbimai - kurti naują</title>
    <meta name="description" content="Banglenčių ir kito surf equipmento turgus.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, turgus, skelbimai, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection