@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<br>
<br>
<br>
<br>
<div class="row">
@foreach ($viewData['products'] as $product)

<div class="col-md-4 col-lg-3 mb-2">
    <style type="text/css"> 
        .card {  
            border: 1px solid rgb(0, 0, 0);
            border-collapse: collapse;
        }
        </style>
<div class="card" >
<img style="height: 300px" src="{{ asset('../images/' . $product -> getImage()) }}"
class="card-img-top img-card">
<div class="card-body text-center">
<a href="{{ route('product.show', ['id' => $product -> getId()]) }}"
class="btn btn-outline-secondary  text-dark">{{ $product ->getName() }}</a>
</div>
</div>
</div>
@endforeach
</div>
@endsection