<!-- page footer top -->
<footer class="page-footer-top">
    <div class="grid-row">
        <div class="grid-col grid-col-3">
            <!-- about -->
            <div class="widget-alt widget-alt-about">
                <div class="head">Why Choose INNOVATE Ecommerce Framework</div>
                <div class="cont">
                    <ul>
                        <li> Highly scalable Laravel Based E-commerce framework</li>
                        <li> Free, Secure, Open Source,Blazing Fast,Small, Highly customizable and easy to setup E-commerce Framework  </li>
                    </ul>
                </div>
            </div>
            <!--/ about -->
        </div>

        <div class="grid-col grid-col-3">
            <!-- contacts -->
            <div class="widget-alt widget-alt-contacts">
                <div class="head">Contact Info</div>
                <div class="cont">
                    <address><i class="fa fa-map-marker"></i>Bole International Airport,Addis Ababa Ethiopia </address>
                    <ul>
                        <li><i class="fa fa-mobile"></i>(+251)923780688 </li>
                        <li><i class="fa fa-mobile"></i>(+251) 913854712 3</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-envelope-o"></i><a href="#">mail@tmgproduction.com</a></li>
                        <li><i class="fa fa-link"></i><a href="#">www.tmgproduction.com</a></li>
                    </ul>
                    <ol>
                        <li><a href="#" class="fa fa-twitter"></a></li><!--
									--><li><a href="#" class="fa fa-facebook"></a></li><!--
									--><li><a href="#" class="fa fa-skype"></a></li><!--
									--><li><a href="#" class="fa fa-rss"></a></li><!--
									--><li><a href="#" class="fa fa-dribbble"></a></li>
                    </ol>
                </div>
            </div>
            <!--/ contacts -->
        </div>

        <div class="grid-col grid-col-3">
            <!-- recent posts -->
            <div class="widget-alt widget-alt-posts">
                <div class="head">Recent Posts</div>
                <div class="cont">
                    <ul>
                        <li>
                            <a href="#"><img src="{{ Theme::asset('default::pic/recent-posts/item-1.jpg') }}"  alt="item-1" width="58" height="58" /></a>
                            <p><a href="#">Etiam mi sapien, luctus ac tempor quis</a><i class="fa fa-angle-right"></i><span>October 16, 2014</span></p>
                        </li>
                        <li>
                            <a href="#"><img src="{{ Theme::asset('default::pic/recent-posts/item-2.jpg') }}" alt="item-1" width="58" height="58" /></a>
                            <p><a href="#">Etiam mi sapien, luctus ac tempor quis</a><i class="fa fa-angle-right"></i><span>October 12, 2014</span></p>
                        </li>
                        <li>
                            <a href="#"><img src="{{ Theme::asset('default::pic/recent-posts/item-3.jpg') }} " alt="item-1" width="58" height="58" /></a>
                            <p><a href="#">Etiam mi sapien, luctus ac tempor quis</a><i class="fa fa-angle-right"></i><span>October 10, 2014</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ recent posts -->
        </div>

        <div class="grid-col grid-col-3">
            <!-- feedback -->
            <div class="widget-alt widget-alt-feedback">
                <div class="head">Shoot a Message</div>
                <div class="cont">
                    <form action="http://html.creaws.com/the8/php/contacts-process.php" method="post" id="widget-form">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="E-mail">
                        <textarea cols="30" rows="5" name="message" placeholder="Message"></textarea>
                        <div id="widget_server_responce"></div>
                        <div class="buttons">
                            <button type="reset">Reset</button><!--
										--><button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/ feedback -->
        </div>
    </div>
</footer>
<!--/ page footer top -->
<!-- page footer bottom -->
<footer class="page-footer-bottom">
    <div class="grid-row">
        <!-- secondary nav -->
        <nav class="secondary-nav">
            <ul>
                             <li>{!! link_to('/', trans('navs.home')) !!}</li><!--
							--><li>{!! link_to('/category', trans('innovate.menus.category')) !!}</li><!--
							--><li>{!! link_to('/product', trans('innovate.menus.product')) !!}</li><!--
							--><li>{!! link_to('/product/trend', trans('innovate.menus.trend_products')) !!}</li>

            </ul>
        </nav>
        <!--/ secondary nav -->

        <!-- copyrights -->
        <div class="copyrights">© 2016 - "INNOVET E-commerce Framework. All rights reserved.</div>
        <!--/ copyrights -->
    </div>
</footer>
<!--/ page footer bottom -->