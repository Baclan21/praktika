@extends('layouts.app')
@section('content')
<h1> Ваша корзина</h1>
@foreach ($p as $j )
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$j->img}}" alt="">
    <div class="card-body">
      <h5 class="card-title"> {{ $j->product_id}}
      </h5>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">{{$j->price}}</a>
    </div>
  </div>
@endforeach

@endsection
