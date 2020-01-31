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
                <form role="form" id="form-validation" action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">User Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter User Name!" required value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">User Mail</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Enter User Mail" required value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="repassword" placeholder="Enter Confirm Password" required value="{{ old('repassword') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="phone" placeholder="Enter Phone" required value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" placeholder="Enter Address" required value="{{ old('address') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Quyền</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role" id="">
                                        <option value="0" selected >Khách</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Supper Admin</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-success">Submit</button>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <label style="font-size: 15px" class="col-sm-2 col-form-label control-label">Avatar</label>
                            <div class="form-group row">
                                <input onchange="changeImg(this)" id="img" type="file" name="avatar" class="form-control d-none">
                                <img class="img-fluid" style="border: double" width="300px" src="/image/plus-img.jpg" id="prd_img" alt="">
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
