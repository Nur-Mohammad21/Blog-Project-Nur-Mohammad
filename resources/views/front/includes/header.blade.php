<header>
    <div class="navbar-default">
        <!-- start top search -->
        <div class="top-search bg-theme">
            <div class="container">
                <form class="search-form" action="https://live.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search"><i class="fas fa-times font-size18 margin-10px-top"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light no-padding">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="{{ route('index') }}" class="navbar-brand width-200px sm-width-180px xs-width-150px"><img id="logo" src="{{ asset('/') }}front/img/logos/logo.png" alt="logo"></a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- start menu area -->
                            <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                <li class="{{ request()->routeIs('index')?'active':'' }}"><a  href="{{ route('index') }}">Home</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="{{ route('index') }}">Default</a></li>--}}
{{--                                        <li><a href="travel.html">Travel</a></li>--}}
{{--                                        <li><a href="magazine.html">Magazine</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="{{ request()->routeIs('about')?'active':'' }}"><a href="{{ route('about') }}">About </a></li>
                                <li ><a href="javascript:void(0)">Details</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="standard-post.html">Standard Post</a></li>--}}
{{--                                        <li><a href="gallery-post.html">Gallery Post</a></li>--}}
{{--                                        <li><a href="video-post.html">Video Post</a></li>--}}
{{--                                        <li><a href="quote-post.html">Quote Post</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="{{ request()->routeIs('portfolio')?'active':'' }}"><a href=" {{ route('portfolio') }}">Portfolio</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="portfolio-2-column.html">Portfolio 2 Column</a></li>--}}
{{--                                        <li><a href="portfolio-3-column.html">Portfolio 3 Column</a></li>--}}
{{--                                        <li><a href="portfolio-4-column.html">Portfolio 4 Column</a></li>--}}
{{--                                        <li><a href="javascript:void(0)">Isotope Portfolio</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="portfolio-2-column-isotope.html">Portfolio 2 column</a></li>--}}
{{--                                                <li><a href="portfolio-3-column-isotope.html">Portfolio 3 column</a></li>--}}
{{--                                                <li><a href="portfolio-4-column-isotope.html">Portfolio 4 column</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="single-portfolio.html">Single Portfolio</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li><a href="javascript:void(0)">Blog</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="default-grid.html">Default Grid</a></li>--}}
{{--                                        <li><a href="default-list.html">Default List</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                @if(isset(Auth::guard('member')->user()->name))
                                    <li class="dropdown"><a href="#" class="dropdown-toggle">{{ Auth::guard('member')->user()->name }}</a>
                                        <ul class="dropdown-menu">
                                            <li ><a href="{{ route('member.logout') }}" class="dropdown-item">Logout</a></li>
                                        </ul>
                                    </li>
                                @else
                                <li class="{{ request()->routeIs('member.login')?'active':'' }}"><a href=" {{ route('member.login') }}">Login</a></li>
                                @endif
                                <li class="{{ request()->routeIs('contact')?'active':'' }}"><a href=" {{ route('contact') }}">Contact</a></li>
                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav sm-no-margin sm-margin-65px-right xs-margin-55px-right">
                                <ul class="search">
                                    <li class="search"><a href="javascript:void(0)"><i class="fas fa-search text-theme-color font-size18 margin-5px-top sm-no-margin-top"></i></a></li>
                                </ul>

                            </div>
                            <!-- end attribute navigation -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
