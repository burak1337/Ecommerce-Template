<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{'assets'}}/images/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="{{route('components')}}">Home</a> </li>
                                    <li> <a href="{{route('about')}}">About</a> </li>
                                    <li><a href="{{route('brand')}}">Brand</a></li>
                                    <li><a href="{{route('special')}}">Specials</a></li>
                                    <li><a href="{{route('contacts')}}">Contact Us</a></li>
                                    @auth
                                        <li class=""><a href="{{route('logout')}}">Logout</a></li>
                                    @endauth
                                    @guest
                                        <li class=""><a href="{{route('login')}}">Login</a></li>
                                        <li class=""><a href="{{route('register')}}">Register</a></li>
                                    @endguest
                                    <li class="last">
                                        <a href="#"><img src="{{'assets'}}/images/search_icon.png" alt="icon" /></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            <li><img src="{{'assets'}}/icon/call.png" />(+71)9876543109</li>
                            <li><img src="{{'assets'}}/icon/email.png" />demo@gmail.com</li>
                            <li><img src="{{'assets'}}/icon/loc.png" />Location</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
