@extends('layouts.app')

@section('title', 'COMIC DETAILS')

@section('content')

    <h1 class="text-center display-3 fw-bold text-primary mt-4">COMIC DETAILS</h1>

    <div class="row mx-0  justify-content-center">
        <div class="col-10 px-0 ">

            <div class="row mx-0 my-4 justify-content-center">

                <div class="col-3 my-4 px-4">
                    <div class="card cardBox border-2">
                        <img src="{{ $comic['thumb'] }}" class="card-img object-fit-cover"></img>
                    </div>

                </div>

                <div class="col-3 my-4 px-4">

                    <div><span class="subtitle">TITLE: </span>{{ $comic['title'] }}</div>
                    <div><span class="subtitle">TYPE: </span>{{ $comic['type'] }}</div>
                    <div><span class="subtitle">PRICE: </span>{{ $comic['price'] }}</div>
                    <div><span class="subtitle">GENRES: </span>{{ $comic['series'] }}</div>
                    <div><span class="subtitle">SALE DATE: </span>{{ $comic['sale_date'] }}</div>
                    <div><span class="subtitle fs-4">DESCRIPTION: </span> <br>{{ $comic['description'] }}</div>

                </div>
            </div>
        </div>
    </div>

@endSection
