@extends('layouts.app')
@section('content')
<h1> Ваша корзина</h1>

@foreach ($p as $j )
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$j->products->img}}" alt="">
    <div class="card-body">
      <h5 class="card-title"> {{ $j->products->name}}
      </h5>
      <p class="card-text"></p>
      <a href="" class="btn btn-primary">{{$j->products->price}}</a>
      <a href="/public/test/{{$j->id}}/delete" class="btn btn-primary">Удалить</a>
      
    </div>
  </div>
@endforeach

@endsection
