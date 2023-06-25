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
                                <div class="card">
                                    <div class="card-header">
                                        Da li želite da obrišete ovaj element
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-6 text-uppercase"><strong>{{$item -> title}}</strong></div>
                                            <div class="col-md-2"> {{$item -> size}} ML</div>
                                            <div class="col-md-2"> {{$item -> brend}} </div>
                                            <div class="col-md-2"> {{$item -> price}} KM</div>
                                        </div>
                                        <hr />
                                        <form action="{{ route('removeProduct',['id' => $item->id]) }}" method="post" class="text-end">
                                            @csrf
                                            <input type="submit" class="btn btn-danger px-3" value="OBRIŠI">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection