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
                <h4 class="card-title">Create </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7">
                        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">List Category</label>
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
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name Product" required value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Product Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_code" placeholder="Enter Name Product Code" required value="{{ $product->product_code }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Product Image</label>
                                <div class="col-sm-10">
                                    <table class="table">
                                        <tr  id="add_main">
                                            <td>
                                                <input onchange="changeImg(this)" id="img" type="file" name="image" class="form-control d-none">
                                                <img width="100px" src="{{ $product->image }}" id="prd_img" alt="">
                                            </td>
                                            @foreach ($product_image as $prd_image)
                                                <td>
                                                    <input onchange="changeImg1(this)" id="img1" type="file" name="image1" class="form-control d-none">
                                                    <img class="img-fluid" style="border: double" width="100px" src="{{ $prd_image->image1 }}" id="prd_img1" alt="">
                                                </td>
                                                <td>
                                                    <input onchange="changeImg2(this)" id="img2" type="file" name="image2" class="form-control d-none">
                                                    <img class="img-fluid" style="border: double" width="100px" src="{{ $prd_image->image2 }}" id="prd_img2" alt="">
                                                </td>
                                                <td>
                                                    <input onchange="changeImg3(this)" id="img3" type="file" name="image3" class="form-control d-none">
                                                    <img class="img-fluid" style="border: double" width="100px" src="{{ $prd_image->image3 }}" id="prd_img3" alt="">
                                                </td>
                                                <td>
                                                    <input onchange="changeImg4(this)" id="img4" type="file" name="image4" class="form-control d-none">
                                                    <img class="img-fluid" style="border: double" width="100px" src="{{ $prd_image->image4 }}" id="prd_img4" alt="">
                                                </td>
                                            @endforeach
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price" placeholder="Enter Name Product Price" required value="{{ $product->price }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Price Sale</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price_sale" placeholder="Enter Name Product Price Sale" required value="{{ $product->price_sale }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Product New And Highlight</label>
                                <div class="col-sm-5">
                                    <div class="checkbox">
                                        <input name="new" id="checkbox1" type="checkbox" @if ($product->new == 1) checked @endif>
                                        <label style="font-size: 15px" for="checkbox1">Product New</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="checkbox">
                                        <input name="highlight" id="checkbox2" type="checkbox" @if ($product->highlight == 1) checked @endif>
                                        <label style="font-size: 15px" for="checkbox2">Product Highlight</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="content" id="" cols="30" rows="5">{{ $product->content }}</textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-gradient-success">Edit Product</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

@endsection
