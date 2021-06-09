@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('main_content')

    <div class="main-content">

        <div class="container">
            <div class="current">
                <h2>current series</h2>
            </div>
        </div>

        <div class="container flex">    

            @foreach($comics as $item)
                
            {{-- Single Box --}}
            <div class="single-box">

                <div class="image-box">
                    <a href="{{ route('product', ['id' => $item['id']]) }}">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                    </a>
                </div>

                <h3> {{ $item['series'] }} </h3>

            </div>
            {{-- End Single Box --}}

            @endforeach

        </div>

        <button class="load-btn">Load More</button>

        <div class="bg-blue">

            <div class="container flex">

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-digital-comics.png')}} " alt="comics">
                    <p>digital comics</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-merchandise.png')}} " alt="comics">
                    <p>dc merchandise</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-subscriptions.png')}} " alt="comics">
                    <p>subscription</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-shop-locator.png')}} " alt="comics">
                    <p>comic shop locator</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-dc-power-visa.svg')}} " alt="comics">
                    <p>dc power visa</p>
                </div>

            </div>
        </div>

    </div>
    
@endsection