<html lang="en">
    <head>
    @include('dashboard.layout.header')
    <body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
        @include('dashboard.layout.sidebar') 
            
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                                       
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <a class="no-icon" href="{{route('dashboard.logout')}}">Log out</a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                   @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                   @include('dashboard.layout.footer')
                </div>
            </footer>
        </div>
    </div>
    
</body>
</html>