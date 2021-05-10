<header class="main-header" >
        <!-- Logo -->
        <a href="" class="bg-orange logo" >
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>MS</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">MY STORE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=" navbar navbar-static-top" style="background-color: #fff;">
            <!-- Sidebar toggle button-->
            <a  href="#" style="background-color: #fff;" class="text-orange sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="text-orange sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <img src="{{ asset(Auth::user()->avatar) }}" class="user-image" alt="User Image">
                            <span style="color: #0a0a0a" class="hidden-xs">{{ Auth::user()->name}}</span>
                        </a>
                        <ul class=" dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-orange">
                                <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name}}
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ route('admin.user.edit', ['id'=> Auth::user()->id]) }}" class="btn btn-default btn-flat">Thông tin</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Đăng xuất</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
</header>
