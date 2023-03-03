@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/resources/views/css/style.css">
<div class="sliders"> 
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  @foreach ($a as $b )
      
  @if ($loop->first)
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{$b->products->img}}" class="d-block w-100" alt="...">
    </div>
@else
    <div class="carousel-item">
      <img src="{{$b->products->img}}" class="d-block w-100" alt="...">
    </div>
    @endif
    @endforeach
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
</div>
  @endsection
