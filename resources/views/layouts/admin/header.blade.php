<a href="javascript:void(0);" class="logo">
    <span class="logo-mini"><b>KS</b></span>
    <span class="logo-lg"><b>KS</b>hare</span>
</a>
<nav class="navbar navbar-static-top">
    <a href="javascript:void(0);" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            @auth('admin')
            <li class="dropdown user user-menu">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('images/user.png') }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{auth('admin')->user()->firstName}} {{auth('admin')->user()->lastName}}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="javascript:void(0);" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
            @endauth
        </ul>
    </div>
</nav>