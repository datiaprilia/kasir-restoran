<nav class="main-header navbar navbar-expand navbar-danger navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{ Auth::user()->nama }} <i class="fas fa-caret-down ml-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <a href="{{ route('profile.index') }}" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>
                <a href="javascript:;" onclick="document.getElementById('logout').submit();" class="dropdown-item">
                <i class="fas fa-sign-out-alt mr-2"></i> Keluar
            </a>
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            </div>
        </li>
    </ul>
</nav>