<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="side-nav-header">
                <span>Navigation</span>
            </li>
            <li class="nav-item dropdown open">
                <a href="#" class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-gauge"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-account"></i>
                    </span>
                    <span class="title">Users</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.users.index') }}">List User</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}">Create User</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-view-list"></i>
                    </span>
                    <span class="title">Categories</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.categories.index') }}">List Category</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.create') }}">Create Category</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-dropbox"></i>
                    </span>
                    <span class="title">Products</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.products.index') }}">List Product</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.products.create') }}">Create Product</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-header">
                <span>Others</span>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-image-filter-tilt-shift"></i>
                    </span>
                    <span class="title">Extra</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="login-2.html">Login 2</a>
                    </li>
                    <li>
                        <a href="sign-up.html">Sign Up</a>
                    </li>
                    <li>
                        <a href="404.html">404</a>
                    </li>
                    <li>
                        <a href="500.html">500</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-menu"></i>
                    </span>
                    <span class="title">Multiple Levels</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Level 1.2</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Level 1.1</span>
                            <span class="arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);">Level 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
