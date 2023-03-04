@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="col-md 6"> 
        <label for="file"> Картинка товара</label> 
        <input type="file" name="file" id="file" required> 
    </div>
    <div class="col-md 6"> 
        <label for="kategory" name="kategory" id="kategory" required>
    </div>
    <div class="col-md 6"> 
        <label for="quantity" name="quantity" id="quantity" required>
    </div>
    <div class="col-md 6">
        <label for="name">Название товара</label> 
        <input type="text" name="name" id="name" required> 
</div> 
    <div class="col-md 6">
        <label for="description"> Описание товара </label>
        <input type="text" name="description" id="description" required>
</div>
    <div class="col-md 6"> 
        <label for="price"> Цена товара</label> 
        <input type="price" name="price" id="price" step="0.01" required>
</div>
<button type="submit"> Добавить товар</button>
</form>
@endsection