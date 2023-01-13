@extends('layouts.app')

@section('content')

    <main class="content bg-grad section one-page">
        <div class="container">
            <div class="row col-sm-5 mx-auto justify-content-center">
                <div class="mt-5 col-12">
                    <div>
                        <div class="card-body">
                            @livewire('login-register')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')

    <script type="text/javascript" src="/js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection