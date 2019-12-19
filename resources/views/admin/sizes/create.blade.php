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
                    <div class="col-sm-6">
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
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">List Size</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="size_id" id="parent_id">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->size }}</option>
                                    @endforeach                                    
                                </select>
                            </div>
                        </div>
                        <form action="{{ route('admin.sizes.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Size</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="size"
                                        placeholder="Enter Size Name">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-gradient-success">Thêm Size</button>
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
