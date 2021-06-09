@extends('layouts.app')

@section('main_content')

    <div class="single-product">

        <div class="bg-blue">

        </div>

        <div class="container">

            <img class="product-image" src=" {{ $product['thumb'] }}" alt="{{ $product['series'] }}">

            <div class="info flex">

                <div class="info-product">
                    
                    <h1>{{ $product['title'] }}</h1>

                    <div class="availability flex">

                        <div class="price">U.S: Price: <span class="result-price">{{ $product['price'] }}</span></div>

                        <div class="available">Available</div>

                        <div class="check-availability"> Check Availability <span><i class="fas fa-sort-down"></i></span></div>

                    </div>

                    <p class="description"> {!! $product['description'] !!} </p>

                </div>

                <div class="adv-image">
                    <h3>ADVERTISEMENT</h3>
                    <img src=" {{ asset('img/adv.jpg')}} " alt="advisor">
                </div>
            </div>

            <div class="cast flex">

                <div></div>

                <div></div>

            </div>

        </div>

    </div>

@endsection