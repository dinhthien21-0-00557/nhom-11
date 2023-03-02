@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<br>
<br>
<br>
<br>
    <div class="card" style="background-image: url(/images/12345.jpg)">
        <style type="text/css"> 
            .card {  
                border: 1px solid rgb(0, 0, 0);
                border-collapse: collapse;
            }
            </style>
        <div class="card-header text-white bg-secondary">
            Thanh toán
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <style> 
                        table, tr, th {  
                            border: 1px solid rgb(0, 0, 0);
                            border-collapse: collapse;
                        }
                        </style>
                    <tr >
                        <th  scope="col">ID</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Sô lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>${{ $product->getPrice() }}</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Tổng tiền:</b> ${{ $viewData['total'] }}</a>
                    @if (count($viewData["products"]) > 0)
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Đặt hàng</a>
                    <a href="{{ route('cart.delete') }}">
                        <button class="btn btn-danger mb-2">
                            Xóa sản phẩm
                        </button>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
