<section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Admin Panel</li>
        <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ (request()->is('admin/user*')) ? 'active' : '' }}">
            <a href="{{ route('admin.user') }}">
                <i class="fa fa-users"></i> <span>User Management</span>
            </a>
        </li>
        <li class="{{ (request()->is('admin/category*')) ? 'active' : '' }}">
            <a href="{{ route('admin.category') }}">
                <i class="fa fa-list-alt"></i> <span>Category Management</span>
            </a>
        </li>
        <li class="{{ (request()->is('admin/blog*')) ? 'active' : '' }}">
            <a href="{{ route('admin.blog') }}">
                <i class="fa fa-newspaper-o"></i> <span>Blog Management</span>
            </a>
        </li>
    </ul>
</section>