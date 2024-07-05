@extends('layouts.app')

@section('title', 'COMICS LIST')

@section('content')
    <h1 class="text-center display-3 fw-bold text-primary mt-4">COMICS LIST</h1>

    <div class="row mx-0 justify-content-center">
        <div class="col-10 px-0 rounded">

            <table class="table border border-5 border-black fw-bold text-uppercase">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="text-primary">#</th>
                        <th scope="col" class="text-primary">Title</th>
                        <th scope="col" class="text-primary">Description</th>
                        <th scope="col" class="text-primary">Price</th>
                        <th scope="col" class="text-primary">Series</th>
                        <th scope="col" class="text-primary">Sale Date</th>
                        <th scope="col" class="text-primary">Type</th>
                        <th scope="col" class="text-primary">Artists</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($comics as $index => $comic)
                        <tr class="text-center">
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $comic->title }}</td>
                            <td><a href="/comics/{{ $index + 1 }}">
                                    <button class="btn my-3 fs-4 fw-bold border border-2 bg-black text-primary">
                                        DESCRIPTION
                                    </button>
                                </a></td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->artists }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endSection
