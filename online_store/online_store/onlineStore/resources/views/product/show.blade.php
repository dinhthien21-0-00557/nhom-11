@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')


<br>
<br>
<br>
<br>
<div class="card mb-3" style="background-image: url(/images/12345.jpg)">
<div class="abc row g-0">
    <style type="text/css"> 
        .abc {  
            border: 1px solid rgb(0, 0, 0);
            border-collapse: collapse;
        }
        </style>
<div class="col-md-4">
<img src="{{ asset('../images/' . $viewData["product"]->getImage()) }}"
class="img-fluid rounded-start">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">
{{ $viewData['product']['name'] }} (${{ $viewData['product']['price'] }})
</h5>
<p class="card-text">{{ $viewData['product']['description'] }}</p>
<form method="POST" action="{{ route('cart.add', ['id' => $viewData['product'] -> getId()]) }}">
    <div class="row">
        @csrf
        <div class="col-auto">
            <div class="input-group col-auto">
                <div class="input-group-text">Số lượng</div>
                <input type="number" min="1" max="10" class=" form-control quantity-input" name="quantity" value="1">
            </div>
        </div>
        <div class="col-auto">
            <button class="btn btn-secondary text-white" type="submit">Thêm vào giỏ hàng</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
@endsection