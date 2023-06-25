@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Kontrola administracija') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                @include('private.meni')
                            </div>
                            <div class="col-md-10">
                                @foreach ($products as $item)
                                    <div class="place_box">
                                        <div class="card-header my-1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <img class="small_img" src="{{ asset('assets') }}/{{$item->image}}" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <div class="fs-4">{{$item->title}}</div>
                                                            <div class="d-flex">
                                                                <div class="w-50">
                                                                    {{$item->size}} ML  - {{$item->price}} KM
                                                                </div>
                                                                <div class="w-50">
                                                                    {{$item->size2}} ML  - {{$item->price2}} KM
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 m-auto">
                                                    {{$item->brend}}
                                                </div>
                                                <div class="col-md-2 text-end m-auto">
                                                    <a href="{{ route('updateForm', ['id'=>$item->id]) }}" class="edit_products">
                                                        <i class="fa-regular fa-pen-to-square p-1"></i>
                                                    </a>
                                                    <a href="{{ route('deleteForm', ['id'=>$item->id]) }}" class="edit_products">
                                                        <i class="fa-solid fa-trash p-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

