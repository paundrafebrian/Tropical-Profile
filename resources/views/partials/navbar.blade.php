<header class="header-area header-sticky">
    <div class="container">
        <nav class="main-nav">
            <a href="{{ url('/') }}" class="logo">
                <h1>Tropical</h1>
            </a>

            <ul class="nav">
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/products') }}">Products</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                {{-- <li><a href="{{ url('/contact') }}">Contact US</a></li> --}}
                <li><a href="#"><i class="fa fa-home"></i> Contact Us</a></li>
            </ul>

            <a class="menu-trigger"><span>Menu</span></a>
        </nav>
    </div>
</header>
