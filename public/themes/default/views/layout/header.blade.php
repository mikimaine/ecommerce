<!-- page header top -->
<header class="page-header-top">
    <div class="grid-row">
        <div class="row">
            <!-- language selector -->
            <div class="language-selector">
                <i class="fa fa-globe"></i>
                <span>Change your language:</span>
                <div>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('menus.language-picker.language') }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! link_to('lang/en', trans('menus.language-picker.langs.en')) !!}</li>
                            <li>{!! link_to('lang/am', trans('menus.language-picker.langs.am')) !!}</li>
                        </ul>
                    </li>
                </div>
            </div>
            <!--/ language selector -->
        </div>

        <div class="row">
            <!-- cart summary -->
            <div class="cart-summary">
                <i class="fa fa-shopping-cart"></i>
                <span>My cart:</span>
                <div>
                    <a href="#">0 items<i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li>
                            <a href="#"><img src="{{ Theme::asset('default::pic/catalog-grid/item-2.jpg') }}" width="54" height="54" alt=""></a>
                            <h4><a href="#">Fujifilm Finepix xp50</a></h4>
                            <p>1 × $900</p>
                        </li>
                        <li>
                            <a href="#"><img src="{{ Theme::asset('default::pic/catalog-grid/item-6.jpg') }} " width="54" height="54" alt=""></a>
                            <h4><a href="#">Motorola Triumph</a></h4>
                            <p>1 × $5500</p>
                        </li>
                        <li class="subtotal">Subtotal: $6400.00</li>
                        <li class="total">
                            <a href="#"><i class="fa fa-shopping-cart"></i>&nbsp; View Cart</a>
                            <a href="#">Checkout &nbsp;<i class="fa fa-share"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ cart summary -->
        </div>

        <div class="row">
            <!-- follow us -->
            <div class="follow-us">
                <a href="#" class="fa fa-contact">C</a>
                <a href="#" class="fa fa-dribbble"></a>
                <a href="#" class="fa fa-tumblr"></a>
                <a href="#" class="fa fa-rss"></a>
                <a href="#" class="fa fa-skype"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-about">A</a>
            </div>
            <!--/ follow us -->
        </div>

        <a href="#" id="page-header-top-switcher" class="switcher"></a>
    </div>
</header>
<!--/ page header top -->

<!-- page header bottom -->
<header id="page-header-bottom" class="page-header-bottom">
    <div class="grid-row">
        <!-- logo -->
        <a href="index-2.html" class="logo">
            <img src="{{ Theme::asset('default::img/logo.png') }}" alt="">
        </a>
        <!--/ logo -->

        <!-- main nav -->
        <nav class="main-nav">
            <ul>
                <li>
                    {!! link_to('/', trans('navs.home')) !!}

                </li>
                <li>
                    {!! link_to('/category', trans('innovate.menus.category')) !!}

                </li>
                <li>
                    {!! link_to('/product', trans('innovate.menus.product')) !!}

                </li>
                <li>
                    {!! link_to('/product/trend', trans('innovate.menus.trend_products')) !!}
                </li>

                    @if (Auth::guest())
                <li>{!! link_to('auth/login', trans('navs.login')) !!}</li>
                <li>{!! link_to('auth/register', trans('navs.register')) !!}</li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! link_to('dashboard', trans('navs.dashboard')) !!}</li>

                            @if (access()->user()->canChangePassword())
                                <li>{!! link_to('auth/password/change', trans('navs.change_password')) !!}</li>
                            @endif

                            @permission('view-backend')
                            <li>{!! link_to_route('admin.dashboard', trans('navs.administration')) !!}</li>
                            @endauth

                            <li>{!! link_to('auth/logout', trans('navs.logout')) !!}</li>
                        </ul>
                    </li>
                    @endif

            </ul>
        </nav>
        <!--/ main nav -->

        <!-- mobile nav -->
        <nav id="mobile-nav" class="mobile-nav">
            <a href="#mobile-nav-1" class="switcher"><i class="fa fa-align-justify"></i></a>
            <ul id="mobile-nav-1">
                <li><a href="#mobile-nav-7" class="opener"><i class="fa fa-angle-right"></i>Home</a></li>
                <li><a href="#mobile-nav-2" class="opener active"><i class="fa fa-angle-right"></i>Features</a></li>
                <li><a href="#mobile-nav-3" class="opener"><i class="fa fa-angle-right"></i>Pages</a></li>
                <li><a href="#mobile-nav-4" class="opener"><i class="fa fa-angle-right"></i>Portfolio</a></li>
                <li><a href="#mobile-nav-5" class="opener"><i class="fa fa-angle-right"></i>Blog</a></li>
                <li><a href="#mobile-nav-6" class="opener"><i class="fa fa-angle-right"></i>Shop</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
            <ul id="mobile-nav-7">
                <li><a href="#mobile-nav-1" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="index-2.html">Default Style</a></li>
                <li><a href="index-blog.html">Blog Style</a></li>
                <li><a href="index-parallax.html">Parallax Style</a></li>
                <li><a href="index-video.html">Background Video</a></li>
            </ul>
            <ul id="mobile-nav-2">
                <li><a href="#mobile-nav-1" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="iOS8-inspired.html" class="active">iOS8 Inspired Design</a></li>
                <li><a href="woo-ready.html">Woo-Ready</a></li>
                <li><a href="#mobile-nav-8" class="opener"><i class="fa fa-angle-right"></i>Content Elements</a></li>
            </ul>
            <ul id="mobile-nav-8">
                <li><a href="#mobile-nav-2" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="feature-accordion.html">Accordion</a></li>
                <li><a href="feature-buttons.html">Buttons</a></li>
                <li><a href="feature-callout.html">Callout</a></li>
                <li><a href="feature-chart-graph.html">Chart Graph</a></li>
                <li><a href="feature-chart-pie.html">Chart Pie</a></li>
                <li><a href="feature-chart-circle.html">Chart Circle</a></li>
                <li><a href="feature-columns.html">Columns</a></li>
                <li><a href="feature-dividers.html">Dividers</a></li>
                <li><a href="feature-icons.html">Icons</a></li>
                <li><a href="feature-lists.html">Lists</a></li>
                <li><a href="feature-messages.html">Messages</a></li>
                <li><a href="feature-milestone.html">Milestone</a></li>
                <li><a href="feature-pricing-table.html">Pricing Table</a></li>
                <li><a href="feature-progress-bar.html">Progress Bar</a></li>
                <li><a href="feature-services.html">Services</a></li>
                <li><a href="feature-tabs.html">Tabs</a></li>
                <li><a href="feature-team.html">Team</a></li>
                <li><a href="feature-testimonials.html">Testimonials</a></li>
                <li><a href="feature-toggle.html">Toggle</a></li>
                <li><a href="feature-twitter.html">Twitter</a></li>
                <li><a href="feature-twitter-carousel.html">Twitter Carousel</a></li>
                <li><a href="feature-video.html">Video</a></li>
            </ul>
            <ul id="mobile-nav-3">
                <li><a href="#mobile-nav-1" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="page-404.html" class="active">404 page</a></li>
                <li><a href="page-about.html">About us</a></li>
                <li><a href="page-coming.html">Coming soon</a></li>
                <li><a href="page-faq.html">FAQ</a></li>
                <li><a href="page-team.html">Our team</a></li>
                <li><a href="page-process.html">Our process</a></li>
                <li><a href="page-progress.html">Our progress</a></li>
                <li><a href="page-services.html">Our services</a></li>
                <li><a href="page-sitemap.html">Sitemap</a></li>
                <li><a href="page-sidebar-one.html">With one sidebar</a></li>
                <li><a href="page-sidebar-two.html">With two sidebars</a></li>
                <li><a href="page-sidebar-none.html">Full width</a></li>
            </ul>
            <ul id="mobile-nav-4">
                <li><a href="#mobile-nav-1" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="portfolio-four.html">Four columns</a></li>
                <li><a href="portfolio-three.html">Three columns</a></li>
                <li><a href="portfolio-two.html">Two columns</a></li>
                <li><a href="portfolio-one.html">One column</a></li>
                <li><a href="portfolio-gallery.html">Gallery</a></li>
                <li><a href="portfolio-single.html">Single item</a></li>
            </ul>
            <ul id="mobile-nav-5">
                <li><a href="#mobile-nav-1" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="blog.html">Regular view</a></li>
                <li><a href="blog-three.html">Three columns</a></li>
                <li><a href="blog-two.html">Two columns</a></li>
                <li><a href="blog-one.html">One column</a></li>
                <li><a href="blog-single.html">Single post</a></li>
            </ul>
            <ul id="mobile-nav-6">
                <li><a href="#mobile-nav-1" class="back"><em>&larr;</em> &nbsp;BACK</a></li>
                <li><a href="shop-catalog.html">Catalog</a></li>
                <li><a href="shop-product.html">Product</a></li>
                <li><a href="shop-cart.html">Cart</a></li>
            </ul>
        </nav>
        <!--/ main nav -->
    </div>
</header>
<!--/ page header bottom -->
<div id="page-header-bottom-holder" class="page-header-bottom-holder"></div>

<!-- page title -->
<div class="page-title">
    <div class="grid-row">
        <h1><i class="fa fa-angle-right"></i> {{ app_name() }}</h1>

        <nav class="bread-crumbs">
            <a href="#">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <span>{{ app_name() }}</span>
        </nav>
    </div>
</div>
<!--/ page title -->
