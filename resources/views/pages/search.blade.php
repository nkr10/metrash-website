@extends('master')
@section('content')
    <link rel="stylesheet" href="{{ url('css/heading.css') }}">

    <h1>Cars for Rent</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="card col-3">
                <img src="images\{{ $product->image_path }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                    <a href="#" class="btn btn-primary">Rent</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>

    <style>
        .card {
            padding: 10px;
            margin: 10px;
        }

        /*h1 {
            padding: 5%;
            background-color: #BFCAD0;
            text-align: center;
        }



        body {
            padding-top: 50px;
        }*/



    </style>

@endsection
