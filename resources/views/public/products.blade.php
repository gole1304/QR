@extends('layouts.start')

@section('public')
    <div class="product_list">
        <header>
            <h2>
                Ponuda krema
            </h2>
        </header>
        @foreach ($products as $product)
            <div class="place_box offer_place_box">
                <div class="full_row">
                    <div class="product_img">
                        <img src="{{ asset('assets') }}/{{$product->image}}" alt="">
                        <div class="abs_left">{{$product->brend}}</div>
                    </div>
                    <div class="product_detail">
                        <div class="product_title">{{$product->title}}</div>
                        <div class="flex-box">
                            <div>{{$product->size}} ml</div>
                            <div>{{$product->price}} KM</div>
                        </div>
                        <div class="flex-box">
                            <div>{{$product->size2}} ml</div>
                            <div>{{$product->price2}} KM</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection