@extends('default::layout.layout')

@section('content')
    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">
            <div class="grid-col grid-col-9">
                <div class="clearfix">
                    <p class="woocommerce-result-count">Showing 1–10 of {!! $products->count() !!} results</p>

                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <input type="hidden" name="post_type" value="product">
                    </form>
                </div>

                <!-- products grid -->
                <section class="products-grid ">
                    <ul>
                        @if($products->count() )

                            @foreach ($products as $product)
                                <li>
                                    <div>
                                        <div class="pic">
                                            <img src="{!! config('app.url').'/app/innovate/product/'.$product->img_big !!}"  alt="{!! $product->name !!}">
                                            <span></span>
                                            <ul>
                                                <li><a href="pic/catalog-grid/item-1.jpg" class="fa fa-plus fancybox"></a></li>
                                                <li><a href="shop-product.html" class="fa fa-share"></a></li>
                                            </ul>
                                            <em></em>
                                        </div>
                                        <!--  <div class="sale">SALE!</div> -->
                                        <h3><a href="shop-product.html">{!! $product->name !!}</a></h3>
                                        <div class="rating"><span style="width:80%"></span></div>
                                        <div class="price"> {!! $product->price !!} {!! $product->currency !!} </div>
                                        <div class="price" >( {!! googleCurrency($product->currency,'USD',$product->price) !!} )</div>


                                        <a href="#" class="button button-with-left-icon button-xsmall"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </li><!--
							-->

                             @endforeach
                        @endif

                    </ul>

                </section>
                <!--/ products grid -->

                <!-- pager -->
                <div class="pager">



                    <a href="#"><i class="fa fa-angle-left"></i></a><!--
							--><a href="#" class="active">1</a><!--
							--><a href="#">2</a><!--
							--><a href="#">3</a><!--
							--><a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
                <!--/ pager -->
            </div>

            <div class="grid-col grid-col-3">
                <div class="widget-area">
                    <!-- widget search -->
                    <div class="widget widget-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"></button>
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!--/ widget search -->

                    <!-- widget filter -->
                    <div class="widget widget-filter">
                        <div class="head"><i class="purple fa fa-crosshairs"></i>Filter By Price</div>
                        <form action="#" class="cont">
                            <div id="slider" class="slider"></div>
                            <div id="slider-label" class="slider-label">Price: $<span class="from">0</span> — $<span class="to">5000</span></div>
                            <button type="submit" class="button button-xsmall">Filter</button>
                        </form>
                    </div>
                    <!--/ widget filter -->

                    <!-- widget cart -->
                    <div class="widget widget-cart">
                        <div class="head"><i class="green fa fa-shopping-cart"></i>Shopping cart</div>
                        <div class="cont">
                            <ul>
                                <li>
                                    <a href="#"><img src="pic/catalog-grid/item-2.jpg" width="54" height="54" alt=""></a>
                                    <h4><a href="#">Fujifilm Finepix xp50</a></h4>
                                    <p>1 × $900</p>
                                </li>
                                <li>
                                    <a href="#"><img src="pic/catalog-grid/item-6.jpg" width="54" height="54" alt=""></a>
                                    <h4><a href="#">Motorola Triumph</a></h4>
                                    <p>1 × $5500</p>
                                </li>
                            </ul>
                            <a href="#" class="fa fa-share"></a>
                            <div class="total">Subtotal: £2000.00</div>
                        </div>
                    </div>
                    <!--/ widget cart -->

                    <!-- widget categories -->
                    <div class="widget widget-categories">
                        <div class="head"><i class="blue fa fa-align-justify"></i>Product Categories</div>
                        <div class="cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Headphones</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Notebook</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Phones</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Other</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ widget categories -->

                    <!-- widget sellers -->
                    <div class="widget widget-sellers">
                        <div class="head"><i class="light-blue fa fa-star"></i>Best Selers</div>
                        <div class="cont">
                            <div id="sellers-carousel" class="owl-carousel">
                                <div class="item">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-4.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Alcatel OT-990</a></h4>
                                            <div class="price">$3100</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-5.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">HTC Freestyle</a></h4>
                                            <div class="price">$1100</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-7.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Anycool T818</a></h4>
                                            <div class="price">$4000</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-3.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Fujifilm Finepix</a></h4>
                                            <div class="price">$2300</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-1.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Motorola Triumph</a></h4>
                                            <div class="price">$1500</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-2.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Fujifilm Finepix</a></h4>
                                            <div class="price">$900</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-9.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Motorola Droid X</a></h4>
                                            <div class="price">$3500</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-8.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">FLY E176</a></h4>
                                            <div class="price">$700</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-7.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Anycool T818</a></h4>
                                            <div class="price">$4000</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="foot">&nbsp;</div>
                    </div>
                    <!--/ widget sellers -->

                    <!-- widget sellers -->
                    <div class="widget widget-sellers">
                        <div class="head"><i class="orange fa fa-trophy"></i>On Sale</div>
                        <div class="cont">
                            <div id="sales-carousel" class="owl-carousel">
                                <div class="item">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-3.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Fujifilm Finepix</a></h4>
                                            <div class="price">$2300</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-1.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Motorola Triumph</a></h4>
                                            <div class="price">$1500</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-2.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Fujifilm Finepix</a></h4>
                                            <div class="price">$900</div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-4.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Alcatel OT-990</a></h4>
                                            <div class="price">$3100</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-5.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">HTC Freestyle</a></h4>
                                            <div class="price">$1100</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-7.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Anycool T818</a></h4>
                                            <div class="price">$4000</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-9.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Motorola Droid X</a></h4>
                                            <div class="price">$3500</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-8.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">FLY E176</a></h4>
                                            <div class="price">$700</div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="pic/catalog-grid/item-7.jpg" width="54" height="54" alt=""></a>
                                            <h4><a href="#">Anycool T818</a></h4>
                                            <div class="price">$4000</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="foot">&nbsp;</div>
                    </div>
                    <!--/ widget sellers -->

                    <!-- widget tags -->
                    <div class="widget widget-tags">
                        <div class="head"><i class="purple fa fa-tags"></i>Tags</div>
                        <div class="cont">
                            <a href="#">Headphones</a><!--
									--><a href="#">iPhone</a><!--
									--><a href="#">Laptop</a><!--
									--><a href="#">Music</a><!--
									--><a href="#">Quad-Core</a><!--
									--><a href="#">Rooter</a><!--
									--><a href="#">Tablet</a><!--
									--><a href="#">TV Watch</a><!--
									--><a href="#">WiFi</a><!--
									--><a href="#">Art</a><!--
									--><a href="#">Beauty</a><!--
									--><a href="#">Cat</a>
                        </div>
                    </div>
                    <!--/ widget tags -->
                </div>
            </div>
        </div>
    </main>
    <!--/ page content -->
@endsection