@extends('layouts.app')

@section('title', 'COMIC DESCRIPTION')

@section('content')

    <h1 class="text-center display-3 fw-bold text-warning mt-4">COMIC DESCRIPTION</h1>

    <div class="row mx-0  justify-content-center">
        <div class="col-10 px-0 ">
            <table class="table border border-5 border-black fw-bold text-uppercase">
                <thead>
                    <tr class="text-center">
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
                    <tr class="text-center">
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->artists }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endSection
