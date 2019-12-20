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
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Sô Điện Thoại</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Tổng Tiền</th>
                                <th>Trạng Thái</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $order->user_name }}</td>
                                    <td>{{ $order->user_phone }}</td>
                                    <td>{{ $order->user_email }}</td>
                                    <td>{{ $order->user_address }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>
                                        @if ($order->status == 0)
                                            <button class="btn btn-warning btn-sm">Chờ Xử Lý</button>
                                        @endif
                                    </td>
                                    <td class="text-center font-size-18">
                                        <a href="{{ route('admin.orders.show', $order->id) }}"><button class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i></button></a>
                                        <a href="{{ route('admin.order.cancelOrder', $order->id) }}"><button class="btn btn-danger btn-sm checkconfirm">X</button></a>
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
