@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="../resources/views/css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <style> .card{
                display: flex;
                justify-content:space-between;
            }
            </style>
            @if($add==1)
            <h1> Товар добавлен в корзину</h1>
            @endif
            @foreach ( $a as $b)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$b->img}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"> {{ $b->name}}
                  </h5>
                  <p class="card-text">{{$b->description}}</p>
                  <a href="/public/test/{{$b->id}}" class="btn btn-primary">{{$b->price}}</a>
                </div>
              </div>


              @endforeach

              @endsection

