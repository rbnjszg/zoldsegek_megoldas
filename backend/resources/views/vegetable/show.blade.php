@extends('layouts.main')

@section('title', $title)

@section('content')
    <div class="container">
        <h1 class="text-center text-uppercase">{{ $title }}</h1>
        <div class="row">
            <div class="col-md-12 col-lg-6" >
                <img class="img-fluid" src="{{asset("images/$vegetables[image]")}}" alt="">
            </div>
            <div class="col-md-12 col-lg-6" >
                <p>{{ $vegetables['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
