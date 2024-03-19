@extends('layouts.main', [
    'menuActive' => 'dashboard'
])

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area bx-top-6">
                    <h6>Selamat datang, <span class="font-weight-bold text-info">@auth {{ auth()->user()->name }} @endauth</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
