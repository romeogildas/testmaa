<style>
    .main-menu-area nav ul li.current a {
        color: #8d1812;
        font-weight: bold;
    }
    .contain{
        margin-right: 0;
    }
    .main-header-area {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffff; 
    z-index: 1000; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

</style>

<header>
    <div class="header-area-top-area">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                    <div class="header-top-left">
                        <p>
                            <i class="fa fa-map-marker"></i>  </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                    <div class="header-top-right">
                        <nav>
                            <ul>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="registration.html">Register</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="main-header-area">
        <div class="container contain">
            <div class="row arrow4">
                <div class="col-lg-2 col-md-2 col-sm-12 col-sm-12">
                    <div class="">
                        <a href="#">
                            <img src="img/MAA.png" alt="" style="width: 120px; height: auto;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12 mx-auto">
                    
                    <div class="main-menu-area">
                        <nav>
                            <ul>
                                <li class="{{ Route::currentRouteName() == 'index' ? 'current' : '' }}">
                                    <a href="{{ route('index') }}">Accueil</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'services' ? 'current' : '' }}">
                                    <a href="{{ route('services') }}">Nos services</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'about' ? 'current' : '' }}">
                                    <a href="{{ route('about') }}">A propos</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'faq' ? 'current' : '' }}">
                                    <a href="{{ route('faq') }}">FAQ</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contacts.index' ? 'current' : '' }}">
                                    <a href="{{ route('contacts.index') }}">Contact</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contacts.index' ? 'current' : '' }} get-consultation">
                                    <a href="{{ route('contacts.index') }}">Prendre rendez-vous</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="{{ Route::currentRouteName() == 'index' ? 'current' : '' }}">
                                    <a href="{{ route('index') }}">Accueil</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'services' ? 'current' : '' }}">
                                    <a href="{{ route('services') }}">Nos services</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'about' ? 'current' : '' }}">
                                    <a href="{{ route('about') }}">A propos</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'faq' ? 'current' : '' }}">
                                    <a href="{{ route('faq') }}">FAQ</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contacts.index' ? 'current' : '' }}">
                                    <a href="{{ route('contacts.index') }}">Contact</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contacts.index' ? 'current' : '' }} get-consultation">
                                    <a href="{{ route('contacts.index') }}">Prendre rendez-vous</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>

<script>
    $(document).ready(function() {
        var header = $(".main-header-area");
        var sticky = header.offset().top;

        $(window).scroll(function() {
            if (window.pageYOffset > sticky) {
                header.addClass("fixed");
            } else {
                header.removeClass("fixed");
            }
        });
    });
</script>