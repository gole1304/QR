@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Kontrola administracija') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                @include('private.meni')
                            </div>
                            <div class="col-md-10">Main content</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
