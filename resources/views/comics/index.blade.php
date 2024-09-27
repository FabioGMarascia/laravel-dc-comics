@extends('layouts.app')

@section('title', 'COMICS LIST')

@section('content')
    <h1 class="text-center display-3 fw-bold text-primary my-4">COMICS LIST</h1>

    <div class="row mx-0 justify-content-center">
        <div class="col-10 px-0 rounded">

            <div class="row mx-0 my-4 justify-content-around">
                @foreach ($comics as $index => $comic)
                    <div class="col-3 px-0 my-4 px-4">
                        <div class="card cardBox border-2 h-100">
                            <img src="{{ $comic['thumb'] }}" class="card-img" loading="lazy"></img>

                            <div class="card-img-overlay cardInfoBox text-white fw-bold text-center p-2 bg-black lh-lg">

                                <div class="mt-5 fs-5"><span class="subtitle fs-3">TITLE</span> <br>{{ $comic['title'] }}
                                </div>
                                <div>
                                    <a href="/comics/{{ $index + 1 }}">
                                        <button class="btn mt-5 fs-4 fw-bold border border-4 w-50 border-warning">
                                            <span class="text-warning">DETAILS</span>
                                        </button>
                                    </a>
                                </div>

                                <a href="/comics/{{ $index + 1 }}/edit">
                                    <button class="btn fw-bold fs-4 mt-5 border border-4 w-50 border-success">
                                        <span class="text-success">EDIT
                                        </span>
                                    </button>
                                </a>

                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn fw-bold fs-4 mt-5 border border-4 w-50 border-danger">
                                        <span class="text-danger">DELETE
                                        </span>
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endSection

@section('css')
    <style>
        .cardBox:hover {
            transform: scale(1.1);
            transition: 400ms;

        }

        .cardInfoBox {
            opacity: 0;
        }

        .cardInfoBox:hover {
            opacity: 1;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
