@extends('layouts.app')

@section('title', 'COMICS FORM')

@section('content')

    <h1 class="text-center display-3 fw-bold text-primary mt-4">COMICS FORM</h1>

    <form action="" method="">
        <div class="row mx-0 justify-content-center">
            <div class="col-6 px-0 rounded">

                <div class="row mx-0 justify-content-around">
                    <div class="col-5 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">TITLE</h3>
                        <input type="text" class="input-group">

                    </div>

                    <div class="col-5 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">PRICE</h3>
                        <input type="text" class="input-group">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">SERIES</h3>
                        <input type="text" class="input-group">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">SALE DATE</h3>
                        <input type="text" class="input-group">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">TYPE</h3>
                        <input type="text" class="input-group">
                    </div>

                    <div class="col-5 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">ARTISTS</h3>
                        <input type="text" class="input-group">
                    </div>

                    <div class="col-11 px-0 pb-4">
                        <h3 class="text-center py-2 text-primary fw-bold">DESCRIPTION</h3>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="col-3">
                        <button class="btn text-center w-100 bg-white fw-bold text-black fs-5">
                            ADD COMICS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endSection
