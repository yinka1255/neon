<div class="sidebar-menu">

    <div class="sidebar-menu-inner">
        
        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="{{url('admin/index')}}">
                    <img src="{{asset('public/admin/images/logo@2x.png')}}" width="120" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

                            
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>
        
                                
        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li @if(Request::segment(2) == "index") class="active" @endif>
                <a href="{{url('admin/index')}}">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "categories") class="active" @endif>
                <a href="{{url('admin/categories')}}">
                    <i class="entypo-floppy"></i>
                    <span class="title">Categories </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "products") class="active" @endif>
                <a href="{{url('admin/products')}}">
                    <i class="entypo-tag"></i>
                    <span class="title">Products </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "inventories") class="active" @endif>
                <a href="{{url('admin/inventories')}}">
                    <i class="entypo-record"></i>
                    <span class="title">Inventory </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "orders") class="active" @endif>
                <a href="{{url('admin/orders')}}">
                    <i class="entypo-briefcase"></i>
                    <span class="title">Manage Orders </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "admins") class="active" @endif>
                <a href="{{url('admin/admins')}}">
                    <i class="entypo-users"></i>
                    <span class="title">Manage Users </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "customers") class="active" @endif>
                <a href="{{url('admin/customers')}}">
                    <i class="entypo-users"></i>
                    <span class="title">Customers </span>
                </a>
            </li>
            <li @if(Request::segment(2) == "reports") class="active" @endif>
                <a href="{{url('admin/reports')}}">
                    <i class="entypo-chart-pie"></i>
                    <span class="title">Reports </span>
                </a>
            </li>
        </ul>
        
    </div>
</div>
