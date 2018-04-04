@extends('layouts.app')

@section('title', 'Test')

@section('slider')
    <div class="interiorbackgroundimage">
        <img src={{ asset('images/carousel1.jpg')}} />
    </div>
@endsection

@section('content')
    <div class="mainpageContent">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="contentModule">
                        <h2>This is a test page.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/mp.css') }}">
