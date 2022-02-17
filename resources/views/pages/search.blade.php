@extends('master')
@section('content')
    <link rel="stylesheet" href="{{ url('css/heading.css') }}">

    <h1>Cars for Rent</h1>


        <div class="side-bar">
            <h3>By Category</h3>
            <ul class="nav flex-column">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link active" href="#">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                    <div class="card col-3">
                        <img src="images/{{ $product->image_path }}" class="card-img-top" alt="{{ $product->name }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                            <a href="{{ route('search.show', $product->slug) }}" class="btn btn-primary">Rent</a>
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


        .row
        {
            width: auto;
            margin-left: 15%;
        }



    </style>

@endsection
