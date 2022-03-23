    <!-- Primary Navigation Menu -->
    <!-- header-area -->
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo/logo.png" alt="Logo">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="{{ ($navlink == 'home') ? 'active' : '' }}"><a href="/">home</a></li>
                                    <li class="{{ ($navlink == 'movies') ? 'active' : '' }}"><a href="/movies">movies</a></li>
                                    <li class="{{ ($navlink == 'series') ? 'active' : '' }}"><a href=/series>series</a></li>
                                    <li class="{{ ($navlink == 'about') ? 'active' : '' }}"><a href="/about">about us</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                            <div class="navbar-wrap main-menu d-none d-md-block">
                                <ul class="navigation">
                                        <li class="menu-item-has-children"><div class="header-avatar-img">
                                            <img src="img/blog/post_avatar_img.png" alt="img">
                                        </div>
                                            <ul class="submenu">
                                                <li><a href="add">Add Movies</a></li>
                                                @if (Route::has('login'))
                                                    @auth
                                                    <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a></li>
                                                    <form method="POST" id="logout-form" action="{{ route('logout') }}" style="display: none">
                                                        @csrf
                                                    </form>
                                                    @else
                                                    <li><a href="{{ route('login') }}">Log In</a></li>
                                                    @endauth
                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="mobile-menu">
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>

                </div>
            </div>
        </div>
    </div>
<!-- header-area-end -->
