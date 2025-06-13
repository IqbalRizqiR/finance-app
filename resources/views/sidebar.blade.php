<div class="sidebar">
        <div class="logo">
            <img width="60px" height="60px" src="https://smkpariwisatatelkom.sch.id/wp-content/uploads/2021/04/logo-TS-1.jpg" alt="">
        </div>
        <ul class="menu">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="{{ Request::is('profile') ? 'active' : '' }}">
                <a href="{{ route('profile') }}">
                    <i class="fa fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fa fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
