@extends('layouts.start')

@section('public')
<div class="o_nama">
       <h2>O nama</h2>
    <div class="about_text">
        <p>
            Poštovani klijenti, predstavljamo vam SUNLIGHT LOUNGE grupaciju, ekskluzivnu njemačku franšizu solarijuma, prisutnu na domaćem tržištu od 2011. godine koja uspješno posluje na 6 lokacija u Bosni i Hercegovini.
        </p>
        <p>
            Ponosno predstavljamo partnerstvo sa “megaSun KBL” i “7suns”, zasigurno najekskuzivniji brendovi u profesionalnoj industriji solarijuma.
        </p>
        <p>Dobro nam došli!</p>
    </div>
    <div class="kreme">
        <a href="{{ route('products')}}">
            Kozmetika
        </a>
    </div>
    <h2>
        Poslovnice
    </h2>
    <div class="places">
        @foreach ($poslovnice as $item)
            <div class="place_box">
                <div class="place">{{$item->title}}</div>
                <div class="add">{{$item->address}}</div>
                <div class="tel">Tel:{{$item->phone}} </div>
            </div>
        @endforeach
    </div>
</div>
@endsection