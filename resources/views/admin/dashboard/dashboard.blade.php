@extends('admin.layouts.main')
@section('content')
<div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Earning</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="font-weight-light font-size-28 m-b-0">$26,932</h2>
                            <span>Sales:</span>
                            <span class="text-dark">1,782</span>
                        </div>
                        <div class="m-b-15">
                            <canvas id="earning-chart" class="chart" style="height: 170px;"></canvas>
                        </div>
                        <div class="row p-v-25">
                            <div class="col border right">
                                <div class="text-center">
                                    <span class="text-semibold d-block opacity-07">Margin</span>
                                    <span class="text-semibold">$17,312</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <span class="text-semibold d-block opacity-07">Fees</span>
                                    <span class="text-semibold">$9,620</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body border right border-hide-md">
                                    <div class="map-400" id="map"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-header">
                                    <h4 class="card-title">Allocation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="m-t-10">
                                        <span class="status success"></span>
                                        <span class="m-b-10 font-size-16 m-l-5">United State</span>
                                        <div class="float-right">
                                            <b class=" font-size-18 text-dark">38</b>
                                            <span>%</span>
                                        </div>
                                        <div class="progress m-t-15">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 38%" aria-valuenow="38" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="m-t-40">
                                        <span class="status info"></span>
                                        <span class="m-b-10 font-size-16 m-l-5">Asia</span>
                                        <div class="float-right">
                                            <b class=" font-size-18 text-dark">26</b>
                                            <span>%</span>
                                        </div>
                                        <div class="progress m-t-15">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 26%" aria-valuenow="26" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="m-t-40">
                                        <span class="status warning"></span>
                                        <span class="m-b-10 font-size-16 m-l-5">South East Asia</span>
                                        <div class="float-right">
                                            <b class=" font-size-18 text-dark">36</b>
                                            <span>%</span>
                                        </div>
                                        <div class="progress m-t-15">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 36%" aria-valuenow="36" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="m-t-40">
                                        <button class="btn btn-default">View All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="m-b-0">Page Views</h4>
                                    <p>12,158</p>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-default btn-sm m-t-10">View Details</button>
                                </div>
                            </div>
                            <div class="m-t-20">
                                <canvas class="chart" id="page-view-chart" style="height: 105px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="m-b-0">Sales Stat</h4>
                                    <p>Jan 1th ~ 15th</p>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-default btn-sm m-t-10">View Details</button>
                                </div>
                            </div>
                            <div class="m-t-10">
                                <canvas class="chart" id="sales-stat-chart" style="height: 105px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Statistic</h4>
                        </div>
                        <div class="card-body">
                            <div class="m-b-40">
                                <canvas id="statistic-chart" class="chart" style="height:220px"></canvas>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="m-b-20">
                                        <span class="status success"></span>
                                        <span class="m-b-10 font-size-16 m-l-5">Transfers</span>
                                        <div class="float-right">
                                            <b class="text-dark">$7,623 </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="m-b-20">
                                        <span class="status primary"></span>
                                        <span class="m-b-10 font-size-16 m-l-5">Bills</span>
                                        <div class="float-right">
                                            <b class=" text-dark">$16,871</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="m-b-20">
                                        <span class="status info"></span>
                                        <span class="m-b-10 font-size-16 m-l-5">Withdraw</span>
                                        <div class="float-right">
                                            <b class=" text-dark">$2,138</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Suppliers</h4>
                            <div class="card-toolbar">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical font-size-20"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-media m-b-20">
                            <li class="list-item">
                                <div class="p-v-15 p-h-20">
                                    <div class="media-img">
                                        <img src="assets/images/avatars/thumb-18.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold font-size-15">Pinterest</span>
                                        <span class="sub-title">Social Media</span>
                                        <div class="float-item">
                                            <span class="font-size-16 text-success">+ 220.40</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="p-v-15 p-h-20">
                                    <div class="media-img">
                                        <img src="assets/images/avatars/thumb-19.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold font-size-15">FHK</span>
                                        <span class="sub-title">Organization</span>
                                        <div class="float-item">
                                            <span class="font-size-16 text-danger">- 332.80</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="p-v-15 p-h-20">
                                    <div class="media-img">
                                        <img src="assets/images/avatars/thumb-20.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold font-size-15">Minnesota Lynx</span>
                                        <span class="sub-title">Basketball team</span>
                                        <div class="float-item">
                                            <span class="font-size-16 text-danger">- 128.32</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="p-v-15 p-h-20">
                                    <div class="media-img">
                                        <img src="assets/images/avatars/thumb-21.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold font-size-15">Alibaba Group</span>
                                        <span class="sub-title">Company</span>
                                        <div class="float-item">
                                            <span class="font-size-16 text-success">+ 62.80</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="p-v-15 p-h-20">
                                    <div class="media-img">
                                        <img src="assets/images/avatars/thumb-22.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold font-size-15">OpenAi</span>
                                        <span class="sub-title">Artificial intelligence</span>
                                        <div class="float-item">
                                            <span class="font-size-16 text-success">+ 232.43</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="p-v-15 p-h-20">
                                    <div class="media-img">
                                        <img src="assets/images/avatars/thumb-23.png" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold font-size-15">Twitch</span>
                                        <span class="sub-title">Website</span>
                                        <div class="float-item">
                                            <span class="font-size-16 text-danger">- 763.23</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Order</h4>
                            <div class="card-toolbar">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical font-size-20"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-overflow">
                            <table class="table table-lg">
                                <thead>
                                    <tr class="bg-gray">
                                        <td class="text-dark text-semibold p-v-10">Customer</td>
                                        <td class="text-dark text-semibold p-v-10">Order ID</td>
                                        <td class="text-dark text-semibold p-v-10">Order Date</td>
                                        <td class="text-dark text-semibold p-v-10">Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Marshall
                                                            Nichols</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>#33667</td>
                                        <td>08 May 2018</td>
                                        <td> $168.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Susie
                                                            Willis</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>#33683</td>
                                        <td>05 May 2018</td>
                                        <td>$433.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Debra
                                                            Stewart</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>#33668</td>
                                        <td>09 May 2018</td>
                                        <td>$2488.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Erin
                                                            Gonzales</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>#33684</td>
                                        <td>16 May 2018</td>
                                        <td>$762.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Product stats</h4>
                            <div class="card-toolbar">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical font-size-20"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-overflow">
                            <table class="table table-lg">
                                <thead>
                                    <tr class="bg-gray">
                                        <td class="text-dark text-semibold p-v-10">Product</td>
                                        <td class="text-dark text-semibold p-v-10">Prices</td>
                                        <td class="text-dark text-semibold p-v-10">Sales</td>
                                        <td class="text-dark text-semibold p-v-10">Views</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-24.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Beat Solo 2
                                                            Headphone</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$229,90</td>
                                        <td>764</td>
                                        <td>180</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-25.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Stylish
                                                            Backpack</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$482,90</td>
                                        <td>523</td>
                                        <td>1252</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="assets/images/avatars/thumb-26.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Adidas
                                                            Sneaker</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$432,90</td>
                                        <td>841</td>
                                        <td>253</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img class="rounded-0"
                                                            src="assets/images/avatars/thumb-27.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10 text-semibold">Play
                                                            Station 4 Slim</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$333,90</td>
                                        <td>1852</td>
                                        <td>8432</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
