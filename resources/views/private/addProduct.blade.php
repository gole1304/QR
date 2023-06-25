@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Kontrolna administracija') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                @include('private.meni')
                            </div>
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">
                                        Dodaj novi proizvod
                                    </div>
                                    <div class="card-body">

                                        <form method="POST" enctype="multipart/form-data" action="{{ route('addProduct') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="title">Naziv proizvoda</label>
                                                        <input type="text" name="naziv" id="title" class="form-control" value="{{old('naziv')}}">
                                                        <small id="titleHelp" class="form-text text-muted">Naziv proizvoda može da ima do 100 karaktera.</small>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="brend">Brend</label>
                                                            <input type="text" name="brend" id="brend" class="form-control" value="{{old('brend')}}">
                                                            <small id="brendHelp" class="form-text text-muted">Naziv proizvođača</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="size">Količina</label>
                                                            <input type="text" name="kolicina" id="size" class="form-control" value="{{old('kolicina')}}">
                                                            <small id="sizeHelp" class="form-text text-muted">Količina u mililitrima</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="price">Cijena</label>
                                                            <input type="text" name="cijena" id="price" class="form-control" value="{{old('cijena')}}">
                                                            <small id="priceHelp" class="form-text text-muted">Cijena izražena u KM.</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="size">Količina 2</label>
                                                            <input type="text" name="kolicina_2" id="size2" class="form-control" value="{{old('kolicina_2')}}">
                                                            <small id="sizeHelp" class="form-text text-muted">Količina u mililitrima</small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="price">Cijena 2</label>
                                                            <input type="text" name="cijena_2" id="price2" class="form-control" value="{{old('cijena_2')}}">
                                                            <small id="priceHelp" class="form-text text-muted">Cijena izražena u KM.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="price">Dodaj sliku</label>
                                                    <input type="file" name="slika" id="image" class="form-control" value="{{old('slika')}}">
                                                    <small id="imageHelp" class="form-text text-muted">Maximalna veličina slike je 2 MB.</small>
                                                </div>
                                            </div>
                                            @if (count($errors) > 0)
                                                <div class = "alert alert-danger">
                                                    {{$errors->first()}}
                                                </div>
                                            @endif
                                            <hr>
                                            <input type="submit" class="btn btn-danger px-3" value="DODAJ">
                                        </form>

                                    </div>
                                </div>
								@if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection