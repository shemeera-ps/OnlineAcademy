<nav class="">
    <img src="{{asset('images/logo.png')}}" alt="" class="">
    <img  id="menu-btn" src="{{asset('images/menu.png')}}" alt="" >
    <div class="navigation ">
        <ul class="nav-links ">
            <i class="fa-solid fa-x" id="menu-close"></i>
            <li ><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About </a></li>
            <li ><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
            <li><a href="{{ route('course') }}" class="{{ request()->routeIs('course') ? 'active' : '' }}">Courses</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <div class="login ml-4">
        @if (Route::has('login'))
            @auth
            <a href="{{ route('dashboard') }}" class="log-btn">Dashboard</a>
            @else
        <a href="{{ route('login') }}" class="log-btn">Log In</a>
        @endauth
        @endif
    </div>
    </div>
    
</nav>

