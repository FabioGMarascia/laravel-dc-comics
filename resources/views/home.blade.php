@extends('layouts.app')

@section('content')
    <h1 class="text-center display-1 fw-bold text-primary">HELLO LARAVEL COMICS</h1>

    <p class="text-center fw-bold display-5 mt-5">My name is {{ $name }} and my surname is {{ $surname }},
        i live in {{ $location }}!</p>
@endSection
