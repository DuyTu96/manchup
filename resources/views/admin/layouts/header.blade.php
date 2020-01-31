<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="/">
                <div class="logo logo-dark" style="background-image: url('{{ asset('/bower_components/assets-admin-ecom/images/logo/logo.png') }}')"></div>
                <div class="logo logo-white" style="background-image: url('{{ asset('/bower_components/assets-admin-ecom/images/logo/logo-white.png') }}')"></div>
            </a>
        </div>
        <ul class="nav-left">
            <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
            </li>
            <li class="search-box">
                <a class="search-toggle" href="javascript:void(0);">
                    <i class="search-icon mdi mdi-magnify"></i>
                    <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                </a>
            </li>
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Type to search...">
                <div class="search-predict">
                    <div class="search-wrapper scrollable">
                        <div class="p-v-10">
                            <span class="display-block m-v-5 p-h-20 text-gray">
                                <i class="ti-file p-r-5"></i>
                                <span>Files</span>
                            </span>
                            <ul class="list-media">
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="media-hover p-h-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-success">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Document.xls</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="media-hover p-h-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-info">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Mockup.doc</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="media-hover p-h-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-danger">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Document.pdf</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="m-h-20 border top"></div>
                        <div class="p-v-10">
                            <span class="display-block m-v-5 p-h-20 text-gray">
                                <i class="ti-user p-r-5"></i>
                                <span>Members</span>
                            </span>
                            <ul class="list-media">
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Debra Stewart</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Jane Hunt</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-footer">
                        <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-apps"></i>
                </a>
                <ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
                    <li>
                        <a href="#">
                            <div class="text-center">
                                <i class="mdi mdi-email-outline font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Email</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-center">
                                <i class="mdi mdi-folder-outline font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Files</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-center">
                                <i class="mdi mdi mdi-gauge font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Dashboard</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-center">
                                <i class="mdi mdi-play-circle-outline font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Video</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-center">
                                <i class="mdi mdi-image-filter font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Images</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-center">
                                <i class="mdi mdi-image-filter-drama font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Cloud</p>
                            </div>
                        </a>
                    </li>
                </ul>    
            </li>
            <li class="notifications dropdown dropdown-animated scale-left">
                <span class="counter">
                    @if (count($ordersNotification) <= 5)
                        {{ count($ordersNotification) }}
                    @else
                        5
                    @endif
                </span>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-bell-ring-outline"></i>
                </a>
                <ul class="dropdown-menu dropdown-lg p-v-0">
                    <li class="p-v-15 p-h-20 border bottom text-dark">
                        <h5 class="m-b-0">
                            <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                            <span>Thông Báo</span>
                        </h5>
                    </li>
                    <li>
                        <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                            @foreach ($ordersNotification as $order)
                                <li class="list-item border bottom">
                                    <a style="text-decoration: none; color: black" href="{{ route('admin.orders.show', $order->id) }}" class="media-hover p-15">
                                        {{ $order->user_name }} - {{ $order->user_phone }} Đã Đặt Hàng! - {{ number_format($order->total_price) }}đ
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="p-v-15 p-h-20 text-center">
                        <span>
                            <a href="{{ route('admin.orders.index') }}" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                        </span>
                    </li>
                </ul>
            </li>
            <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img style="width: 45px; height: 45px" class="profile-img img-fluid" src="{{ Auth::User()->avatar }}" alt="">
                </a>
                <ul class="dropdown-menu dropdown-md p-v-0">
                    <li>
                        <ul class="list-media">
                            <li class="list-item p-15">
                                <div class="media-img">
                                    <img style="width: 75px; height: 75px;" src="{{ Auth::User()->avatar }}" alt="">
                                </div>
                                <div class="info">
                                    <span class="title text-semibold">{{ Auth::User()->name }}</span>
                                    <span class="sub-title">
                                        @if (Auth::User()->role == 1)
                                            Admin
                                        @else
                                            Supper Admin
                                        @endif
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="#">
                            <i class="ti-settings p-r-10"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-user p-r-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-email p-r-10"></i>
                            <span>Inbox</span>
                            <span class="badge badge-pill badge-success pull-right">2</span>
                        </a>
                    </li>
                    <li>
                        <a id="logout" href="">
                            <i class="ti-power-off p-r-10"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                    </li>
                </ul>
            </li>
            <li class="m-r-10">
                <a class="quick-view-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-format-indent-decrease"></i>
                </a>
            </li>
        </ul>
    </div>
</div>