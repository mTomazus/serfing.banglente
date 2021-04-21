@extends('layouts.user')

@section('content')

<div class="section bg-grad">
    <div class="content d-block">
        <h1>USER DASHBOARD</h1>
        <div class="container">
            <div class="col-lg-4 bg-light py-lg-3">
                <h3>Tavo skelbimai</h3>
                <div class="mb-3">
                    <a href="{{ URL::to('/posts/create') }}" class="btn btn-sm btn-primary my-2">Naujas skelbimas</a>
                    <a href="#" class="btn btn-sm btn-secondary my-2">Secondary action</a>
                </div>
                @if(count($posts) > 0)
                    <table class="table table-striped d-flex justify-content-center">
                        @foreach ($posts as $post)
                            <tr class="float-end mx-2">
                                <th>{{ $post->title }}</th>
                                <th><a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-info">Edit</a></th>
                                <th>
                                    {!! Form::open(['action' => ['App\Http\Controllers\User\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
                                    {!! Form::close() !!}
                                </th>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no posts yet</p>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('meta')

    <title>Banglentė - user panel</title>
    <meta name="description" content="Griebiam banglentes ir į bangas, išsinuomuok banglente , SUPą Klaipėdoje ir Melnragėje, banglenčių mokykla.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection