@extends('layouts.app')

@section('content')

    <div class="content bg-grad">
        <div class="vh-92 container">
            <div class="row col-3 mx-auto mt-5 justify-content-center">
                <div class="mt-5 col-12">
                    <div class="card">
                        <div class="logo w-100 card-header bg-danger text-white">
                            <h6 style='font-family:"Anton", sans-serif;'>banglente</h6></div>
                        <div class="card-body">
                            @livewire('login-register')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
