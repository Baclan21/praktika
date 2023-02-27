@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../resources/views/img/battlefield-2042-key-art.jpg.adapt.crop1x1.767p (1)" alt="Первый слайд">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../resources/views/img/cd79fb5a-77da-4bd8-a41f-55bd5c8dcca8 (1).jpg" alt="Второй слайд">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../resources/views/img/df8fbc9126d8c6d4_1920xH.jpg" alt="Третий слайд">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  @endsection
