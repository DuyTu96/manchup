@extends('admin.layouts.main')
@section('content')
<div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">Data Table</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                        <a class="breadcrumb-item" href="#">Tables</a>
                        <span class="breadcrumb-item active">Data Table</span>
                    </nav>
                </div>
            </div>  
            <a href="{{ route('admin.products.create') }}"><button class="btn btn-primary">Add Product</button></a>
            <div class="card">
                <div class="card-body">
                    <div class="table-overflow">
                        @if (session('alert'))
                            <div class="alert alert-success-gradient">
                                <div class="d-flex align-items-center justify-content-start">
                                    <span class="alert-icon">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                    <span><strong>Well done! {{ session('alert') }}</strong></span>
                                </div>
                            </div>
                        @endif
                        <table style="color: black" id="dt-opt" class="table table-hover table-xl">
                            <thead>
                                <tr>
                                    <th style="width: 5%">STT</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Price Sale</th>
                                    <th>Category</th>
                                    <th style="width: 5%">New</th>
                                    <th style="width: 5%">Highlight</th>
                                    <th style="width: 10%">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key =>  $product)
                                    <tr class="test_tr">
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="{{ $product->image }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">{{ $product->product_code }}</span>
                                                        <span class="sub-title">{{ $product->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $product->price }} VND</td>
                                        <td>{{ $product->price_sale }} VND</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            <div class="checkbox text-center">
                                                <input name="new" type="checkbox" @if ($product->new == 1) checked @endif>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox text-center">
                                                <input name="highlight" type="checkbox" @if ($product->highlight == 1) checked @endif>
                                                <label></label>
                                            </div>
                                        </td>
                                        <td class="text-center font-size-18">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('admin.products.edit', $product->id) }}"><button type="button" class="btn btn-primary"><i class="ti-pencil"></i></button></a>
                                                <button type="button" class="btn btn-danger checkconfirm"><i class="ti-trash"></i></button>
                                                <button type="submit" class="test d-none">test</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>       
            </div>   
        </div>
    </div>
<!-- Content Wrapper END -->
@endsection
