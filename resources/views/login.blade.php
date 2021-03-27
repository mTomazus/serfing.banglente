@extends('layouts.app')

@section('content')

    <div class="content bg-grad section">
        <div class="vh-92 container">
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
    </div>

@endsection
