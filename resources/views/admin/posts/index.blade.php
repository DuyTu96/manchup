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
        <div class="card">
            <div class="card-body">
                <div class="table-overflow">
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th style="width: 5%">STT</th>
                                <th>Ảnh</th>
                                <th>Tiêu Đề</th>
                                <th style="width: 10%">Tùy Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $post)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <img src="{{ $post->image }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="info">
                                                    <span class="title">{{ $post->title }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>                                    
                                    <td class="text-center font-size-18">
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('admin.posts.edit', $post->id) }}"><button type="button" class="btn btn-primary"><i class="ti-pencil"></i></button></a>
                                            {{-- <button type="button" class="btn btn-danger checkconfirm"><i class="ti-trash"></i></button>
                                            <button type="submit" class="test d-none">test</button> --}}
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
