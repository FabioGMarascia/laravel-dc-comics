@extends('layouts.app')

@section('title', 'COMICS FORM')

@section('content')

    <h1 class="text-center display-4 fw-bold text-primary my-5">MODIFICA: {{ $comic->title }}</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row mx-0 justify-content-center">
            <div class="col-6 px-0 rounded">

                <div class="row mx-0 justify-content-around">
                    <div class="col-5 px-0 pb-4">
                        <label class="form-label py-2 text-primary fw-bold">TITLE</label>
                        <input type="text" class="form-control" name="title" required value="{{ $comic->title }}">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">PRICE</label>
                        <input type="text" class="form-control" name="price" required value="{{ $comic->price }}">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">SERIES</label>
                        <input type="text" class="form-control" name="series" required value="{{ $comic->series }}">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">SALE DATE</label>
                        <input type="text" class="form-control" name="sale_date" required
                            value="{{ $comic->sale_date }}">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">TYPE</label>
                        <input type="text" class="form-control" name="type" vrequired value="{{ $comic->type }}">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">IMAGE LINK</label>
                        <input type="text" class="form-control" name="thumb" required value="{{ $comic->thumb }}">
                    </div>

                    <div class="col-11 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">DESCRIPTION</label>
                        <textarea class="form-control" aria-label="With textarea" name="description" required>{{ $comic->description }}</textarea>
                    </div>

                    <div class="col-3">
                        <button type="submit" class="btn text-center w-100 bg-primary fw-bold text-black fs-5">
                            UPDATE
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>


@endSection
