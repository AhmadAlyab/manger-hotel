<ul class="nav navbar-nav side-menu" id="sidebarnav">
    <!-- menu item Dashboard-->
    <li>
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <!-- menu title -->
    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
    <!-- List Rooms-->
    <li>
        <a href="{{ route('respetion.listroom') }}">List Room</a>
    </li>
    {{-- Add client --}}
    <li>
        <a href="{{ route('client.create') }}">Add Client</a>
    </li>
    
</ul>