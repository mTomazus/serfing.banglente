@extends('layouts.admin')

@section('content')

    <main class="bg-grad section">
        <div class="container-lg">
            
            <h1>CREATE</h1>
            <div>
                <a class="btn btn-primary"  href="{{ route('products.index') }}">BACK</a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!!</strong>Čia yra problemų . <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-group my-1">
                        <span class="input-group-text" id="basic-addon1">Pavadinimas</span>
                        <input type="text" name="name" class="form-control" placeholder="Įvesk pavadinimą" aria-label="Name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group col-12 my-1">
                        <span class="input-group-text">Description:</span>
                        <textarea class="form-control" name="description" aria-label="Description"></textarea>
                    </div>
                    <div class="input-group col-12 my-1">
                        <span class="input-group-text">Details:</span>
                        <textarea class="form-control" name="details" aria-label="details"></textarea>
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control" name="images[]" multiple aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                      </div>
                    <div class="col-12 my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
    
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