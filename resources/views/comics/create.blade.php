@extends('layouts.app')

@section('title', 'COMICS FORM')

@section('content')

    <h1 class="text-center display-4 fw-bold text-primary my-5">ADD A COMIC</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="row mx-0 justify-content-center">
            <div class="col-6 px-0 rounded">

                <div class="row mx-0 justify-content-around">
                    <div class="col-5 px-0 pb-4">
                        <label class="form-label py-2 text-primary fw-bold">TITLE</label>
                        <input type="text" class="form-control" name="title" placeholder="Name">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">PRICE</label>
                        <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">SERIES</label>
                        <input type="text" class="form-control" name="series" placeholder="Series">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">SALE DATE</label>
                        <input type="text" class="form-control" name="sale_date" placeholder="YYYY-MM-DD">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">TYPE</label>
                        <input type="text" class="form-control" name="type" placeholder="Type">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">IMAGE LINK</label>
                        <input type="text" class="form-control" name="thumb" placeholder="Link">
                    </div>

                    <div class="col-11 px-0 pb-4">
                        <label class="py-2 text-primary fw-bold">DESCRIPTION</label>
                        <textarea class="form-control" aria-label="With textarea" name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="col-3">
                        <button type="submit" class="btn text-center w-100 bg-primary fw-bold text-black fs-5">
                            ADD COMIC
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>


@endSection
