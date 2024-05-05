<ul class="nav navbar-nav side-menu" id="sidebarnav">
    <!-- menu item Dashboard-->
    <li>
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <!-- menu title -->
    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
    <!-- menu item Elements-->
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
            <div class="pull-left"><i class="ti-palette"></i><span
                    class="right-nav-text">Rooms</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="elements" class="collapse" data-parent="#sidebarnav">
            <li><a href="{{ route('room.index') }}">list rooms</a></li>
        </ul>
    </li>
    <!-- Emplyee -->
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
            <div class="pull-left"><i class="ti-calendar"></i><span
                    class="right-nav-text">emplyee</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{ route('emplyee.index') }}">list emplyee </a> </li>
        </ul>
    </li>
    <!-- Client -->
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calndar-menu">
            <div class="pull-left"><i class="ti-calendar"></i><span
                    class="right-nav-text">client</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="calndar-menu" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{ route('client.index') }}">list client </a> </li>
        </ul>
    </li>
    
</ul>