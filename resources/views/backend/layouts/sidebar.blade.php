<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Quản lý user -->
            <li class="treeview">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <span>Quản Lý Người Dùng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.user.index')}}"><i class="fa fa-list"></i> Danh Sách Người Dùng</a></li>
                    <li><a href="{{route('admin.user.create')}}"><i class="fa fa-plus"></i> Thêm Người Dùng</a></li>
                </ul>
            </li>
            <!--Quản lý danh mục-->
            <li class="treeview">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-fw fa-bars" aria-hidden="true"></i>
                    <span>Quản Lý Danh Mục</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.category.index')}}"><i class="fa fa-list"></i>  Danh Sách Danh Mục</a></li>
                    <li><a href="{{route('admin.category.create')}}"><i class="fa fa-plus"></i> Thêm Danh Mục</a></li>
                </ul>
            </li>
            <!-- Quản lý sản phẩm  -->
            <li class="treeview">
                <a href="{{route('admin.product.index')}}">
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <span>Quản Lý Sản Phẩm</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.product.index')}}"><i class="fa fa-list"></i>  Danh Sách Sản Phẩm</a></li>
                    <li><a href="{{route('admin.product.create')}}"><i class="fa fa-plus"></i> Thêm Sản Phẩm</a></li>
                </ul>
            </li>
            <!-- Quản lý bài viết  -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span>Quản Lý Bải Viết</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.article.index')}}"><i class="fa fa-list"></i>  Danh Sách Bài Viết</a></li>
                    <li><a href="{{route('admin.article.create')}}"><i class="fa fa-plus"></i> Thêm Bài Viết</a></li>
                </ul>
            </li>
            <!-- Quản lý nhà cung cấp  -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th" aria-hidden="true"></i>
                    <span>Quản Lý Nhà Cung Cấp</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list"></i>  Danh Sách Nhà Cung Cấp</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Thêm Nhà Cung Cấp</a></li>
                </ul>
            </li>
            <!-- Quản lý thương hiệu  -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th" aria-hidden="true"></i>
                    <span>Quản Lý Thương Hiệu</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list"></i>  Danh Sách Thương Hiệu</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Thêm Thương Hiệu</a></li>
                </ul>
            </li>
            <!-- Quản lý thư viện  -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Quản Lý Thư Viện</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list"></i>  Danh Sách Thư Viện</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Thêm Thư Viện</a></li>
                </ul>
            </li>
            <!-- Quản lý banner  -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Quản Lý Banner</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.banner.index')}}"><i class="fa fa-list"></i>  Danh Sách Banner</a></li>
                    <li><a href="{{route('admin.banner.create')}}"><i class="fa fa-plus"></i> Thêm Banner</a></li>
                </ul>
            </li>
            <!--Quản lý liên hệ-->
            <li class="">
                <a href="{{route('admin.contact.index')}}">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Quản Lý Liên Hệ</span>
                </a>
            </li>
            <!--Cấu hình website-->
            <li class="">
                <a href="{{route('admin.setting.index')}}">
                    <i class="fa fa-gears" aria-hidden="true"></i>
                    <span>Cấu Hình Website</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
