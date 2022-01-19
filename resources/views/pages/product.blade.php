@extends('master')

@section('title', $product -> name)

@section('content')

    <link rel="stylesheet" href="{{ url('css/short.css') }}">
    <div class="product-section container">

        <div class="product-section-image">
            <article>
                <img src="{{URL::to('images').'/'.$product->image_path}}" class="img-fluid" alt="{{$product -> name}}">
            </article>
        </div>

        <div class="product-section-information">
            <article>
                <h1>{{$product -> name}}</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </article>
        </div>

    </div>


    <style>

        /*.img-fluid{
            max-width: 20%;
            padding-left: 50px;
        }*/

        html, body{
            height: 100vh;
        }


        body {
            margin-top: 70px;

        }

        .product-section {
            display: grid;
        }

        .product-section-image {
            grid-column: 1;
            background: #ff9e2c

        }

        .product-section-information {
            grid-column: 2;
            background: #b6701e;
        }

        article {
            position: relative;
            top: 50%;
            transform: translate(0, -50%);


        }





    </style>

@endsection
