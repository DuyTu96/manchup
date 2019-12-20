@extends('admin.layouts.main')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Forms</a>
                    <span class="breadcrumb-item active">Form Validation</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header border bottom">
                <h4 class="card-title">Sửa Sản Phẩm</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Danh Mục</label>
                                <div class="col-sm-10">
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categories as $category)
                                            <option
                                                @if ($product->category_id == $category->id)
                                                    selected
                                                @endif
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Tên Sản Phẩm</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name Product" required value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Mã Sản Phẩm</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_code" placeholder="Enter Name Product Code" required value="{{ $product->product_code }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Giá</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price" placeholder="Enter Name Product Price" required value="{{ $product->price }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Giá Khuyễn Mãi</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price_sale" placeholder="Enter Name Product Price Sale" required value="{{ $product->price_sale }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Size Sản Phẩm</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="size_id" id="">
                                        @foreach ($sizes as $size)
                                            <option @if ($product->size_id == $size->id) selected @endif value="{{ $size->id }}">{{ $size->size }}</option>
                                        @endforeach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Mới & Nổi Bật</label>
                                <div class="col-sm-5">
                                    <div class="checkbox">
                                        <input name="new" id="checkbox1" type="checkbox" @if ($product->new == 1) checked @endif>
                                        <label style="font-size: 15px" for="checkbox1">Sản Phẩm Mới</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="checkbox">
                                        <input name="highlight" id="checkbox2" type="checkbox" @if ($product->highlight == 1) checked @endif>
                                        <label style="font-size: 15px" for="checkbox2">Sản Phẩm Nổi Bật</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <label style="font-size: 15px" class="col-sm-12 col-form-label control-label">Ảnh Sản Phẩm</label>
                                    <table class="table">
                                        <tr  id="add_main">
                                            <td>
                                                <input onchange="changeImg(this)" id="img" type="file" name="image" class="form-control d-none">
                                                <img width="300px" src="{{ $product->image }}" id="prd_img" alt="">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Thông Tin</label>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{ $product->content }}</textarea>
                                </div>
                            </div>
                            <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Mô Tả</label>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-gradient-success">Edit Product</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

@endsection
