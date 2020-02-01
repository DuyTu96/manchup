@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Form Validation</h2>
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
                <h4 class="card-title">Form Validation</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <form action="{{ route('admin.posts.update', $post->id) }}" role="form" id="form-validation" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" src="{{ $post->image }}" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Tiêu Đề</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Nội Dung</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="5">{!! $post->content !!}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

@endsection
