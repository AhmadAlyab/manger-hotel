<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                @if (Auth::guard('web')->check())
                    @include('layouts.sidebar.web-sidebar')
                @endif
                @if (Auth::guard('respetion')->check())
                    @include('layouts.sidebar.respetion-sidebar')
                @endif
            </div>
        </div>

        <!-- Left Sidebar End-->
        <!--=================================
