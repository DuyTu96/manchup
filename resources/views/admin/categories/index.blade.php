@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper START -->
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
        <a href="{{ route('admin.categories.create') }}"><button class="btn btn-primary">Add Category</button></a>
        <div class="card">
            <div class="card-body">div>
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
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th style="width: 10%">STT</th>
                                <th>Category Name</th>
                                <th style="width: 15%">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $cat)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td class="text-center font-size-18">
                                        <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('admin.categories.edit', $cat->id) }}"><button type="button" class="btn btn-primary"><i class="ti-pencil"></i></button></a>
                                            <button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
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
