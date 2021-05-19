@extends('layouts.admin')

@section('content')

<div class="content section vh-92 bg-grad"">
    <div class="mt-0">
        @if (session()->has('message'))
            <div class="alert h4 alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="w-100">
        <div class="content-side w-100 d-flex">
            <div class="col-4">
                <livewire:contacts-table />
            </div>
            <div class="col-4">
                <livewire:coupon-form />
            </div>
        </div>
    </div>

@endsection

@section('meta')

    <title>Banglentė - admin panel - home</title>
    <meta name="description" content="Griebiam banglentes ir į bangas, išsinuomuok banglente , SUPą Klaipėdoje ir Melnragėje, banglenčių mokykla.">
    <meta name="keywords" content="banglentes, SUP, bodyboardai, banglenčių nuoma, mokykla, nuoma, varžybos, lietuva, hidrokostiumai, riedlentės, melnrage, klaipeda, molas, surf, spotas">

@endsection

@section('scripts')

    <script type="text/javascript" src="js/topnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection