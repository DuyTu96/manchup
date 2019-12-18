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
                        <form role="form" id="form-validation">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Required *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputRequired"
                                        placeholder="Required *">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Min Length</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputMinLength"
                                        placeholder="Enter minimum 8 characters">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Max Length</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputMaxLength"
                                        placeholder="Enter maximum 8 characters">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Range length</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputRangeLength"
                                        placeholder="Enter minimum 2 & maximum 6 characters" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Min Value</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputMinValue"
                                        placeholder="Enter number more than 8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Max Value</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputMaxValue"
                                        placeholder="Enter number less than 6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Range Value</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputRangeValue"
                                        placeholder="Enter number between 6 to 12">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputEmail"
                                        placeholder="Enter a valid email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Password</label>
                                <div class="col-sm-10">
                                    <input id="password" type="text" class="form-control" name="inputPassword"
                                        placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputPasswordConfirm"
                                        placeholder="Enter your password again">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">URL</label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" name="inputUrl"
                                        placeholder="Enter a valid URL" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Digit</label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" name="inputDigit" placeholder="Enter a Digit"
                                        required>
                                </div>
                            </div>
                            <button class="btn btn-gradient-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

@endsection
