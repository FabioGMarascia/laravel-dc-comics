@extends('layouts.app')

@section('title', 'COMICS LIST')

@section('content')
    <h1 class="text-center display-3 fw-bold text-primary mt-4">COMICS LIST</h1>

    <div class="row mx-0 justify-content-center">
        <div class="col-10 px-0 rounded">

            <div class="row mx-0 my-4 justify-content-around">
                @foreach ($comics as $index => $comic)
                    <div class="col-3 px-0 my-4 px-4">
                        <div class="card cardBox border-2">
                            <img src="{{ $comic['thumb'] }}" class="card-img object-fit-cover"></img>

                            <div
                                class="card-img-overlay cardInfoBox text-white fw-bold text-center p-2 bg-black overflow-auto lh-lg">
                                <div><span class="subtitle">TITLE: </span> <br>{{ $comic['title'] }}</div>
                                <div><span class="subtitle">TYPE: </span>{{ $comic['type'] }}</div>
                                <div><span class="subtitle">GENRES: </span>{{ $comic['series'] }}</div>
                                <div><span class="subtitle">PRICE: </span>{{ $comic['price'] }}</div>
                                <div><span class="subtitle">SALE DATE: </span>{{ $comic['sale_date'] }}</div>
                                <div>
                                    <a href="/comics/{{ $index + 1 }}">
                                        <button class="btn my-3 fs-4 fw-bold border border-2">
                                            <span class="subtitle">DESCRIPTION</span>
                                        </button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endSection
