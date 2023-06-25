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
                                        Promjena podataka
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-6 text-uppercase"><strong>{{$item -> title}}</strong></div>
                                            <div class="col-md-2"> {{$item -> brend}} </div>
                                        </div>
                                        <hr />
                                        <form action="{{ route('updateProduct',['id' => $item->id]) }}" method="post" encrypt="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="title">Naziv proizvoda</label>
                                                        <input type="text" name="naziv" id="title" class="form-control" value="{{$item->title}}">
                                                        <small id="titleHelp" class="form-text text-muted">Naziv proizvoda može da ima do 100 karaktera.</small>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="brend">Brend</label>
                                                            <input type="text" name="brend" id="brend" class="form-control" value="{{$item->brend}}">
                                                            <small id="brendHelp" class="form-text text-muted">Naziv proizvođača</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="size">Količina</label>
                                                            <input type="text" name="kolicina" id="size" class="form-control" value="{{$item->size}}">
                                                            <small id="sizeHelp" class="form-text text-muted">Količina u mililitrima</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="price">Cijena</label>
                                                            <input type="text" name="cijena" id="price" class="form-control" value="{{$item->price}}">
                                                            <small id="priceHelp" class="form-text text-muted">Cijena izražena u KM.</small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group col-md-4">
                                                            <label for="size">Količina 2</label>
                                                            <input type="text" name="kolicina_2" id="size" class="form-control" value="{{$item->size2}}">
                                                            <small id="sizeHelp" class="form-text text-muted">Količina u mililitrima</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="price">Cijena 2</label>
                                                            <input type="text" name="cijena_2" id="price" class="form-control" value="{{$item->price2}}">
                                                            <small id="priceHelp" class="form-text text-muted">Cijena izražena u KM.</small>
                                                        </div>
                                                    </div>
                                                    @if (count($errors) > 0)
                                                        <div class = "alert alert-danger">
                                                            {{$errors->first()}}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-4">
                                                    <img class="w-100" style="max-width: 300px" src="{{ asset('assets') }}/{{$item->image}}" alt="">
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-danger px-3" value="AŽURIRAJ">
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