@extends('layouts.app')

@section('content')

<div class="container bg-darker text-center py-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-3 text-bold">Who are we?</h1>
            <p class="lead">We are BTS.</p>
        </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-3 text-bold">What de we do?</h1>
            <p class="lead">We do what BTS do.</p>
        </div>
    </div>
    <hr class="my-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-3 text-bold">How to contact us?</h1>
            <p class="lead">Why don't you head to our contact page right 
            <a class="link" href="{{ route('contact') }}">here.</a></p>
        </div>
    </div>
</div>

@endsection
