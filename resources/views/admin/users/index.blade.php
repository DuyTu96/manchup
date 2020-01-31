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
        <div class="card">
            <div class="card-body">
                <div class="table-overflow">
                    <table style="color: black" id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img style="width: 100px; height: 100px; border-radius:5px;" src="{{ $user->avatar }}" alt=""></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->address }}</td>
                                    
                                    <td style="width: 5%" class="text-center font-size-18">
                                        @if (Auth::User()->role >= $user->role)
                                            <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary"><i class="ti-pencil"></i></button></a>
                                        @endif
                                        @if (Auth::User()->role > $user->role)
                                            <button type="submit" class="btn btn-danger checkconfirm"><i class="ti-trash"></i></button>
                                        @endif
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
