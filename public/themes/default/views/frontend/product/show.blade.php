@extends('default::layout.layout')

@section('content')
    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">
            <div class="grid-col grid-col-9">
                <!-- product -->
                <div class="product">
                    <div class="clearfix">
                        <div class="left-col">
                            <div class="pic">
                                <a href="pic/catalog-product/item-1.jpg" rel="fancybox" class="fancybox">
                                    <img src="{!! config('app.url').'/app/innovate/product/'.$product->img_big  !!}" width="400" height="490" alt="{!! $product->product_translations[0]->name !!}">
                                    <span><i class="fa fa-plus"></i></span>
                                </a>
                            </div>

                            <ul class="thumbnails">
                                <li>
                                    <a href="pic/catalog-grid/item-1.jpg" rel="fancybox" class="fancybox">
                                        <img src="{!! config('app.url').'/app/innovate/product/'.$product->img_big  !!}" alt="">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pic/catalog-grid/item-2.jpg" rel="fancybox" class="fancybox">
                                        <img src="{!! config('app.url').'/app/innovate/product/'.$product->img_big  !!}" alt="">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pic/catalog-grid/item-3.jpg" rel="fancybox" class="fancybox">
                                        <img src="{!! config('app.url').'/app/innovate/product/'.$product->img_big  !!}" alt="">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-col">
                            <h1>{!! $product->product_translations[0]->name !!}</h1>
                            <del>{!! $product->previous_price.' '.$product->currency !!} ( {!! googleCurrency($product->currency,'USD',$product->previous_price) !!})</del>
                            <div class="price">{!! $product->price.' '.$product->currency !!} ( {!! googleCurrency($product->currency,'USD',$product->price) !!}) + {!! $product->tax->rate !!}% Tax</div>
                            <div class="description">
                                <p><span>Quick Overview:</span></p>
                                <p>{!! $product->product_translations[0]->short_description !!}</p>
                            </div>
                            <div class="main-features">
                                <p><span>Product properties:</span></p>
                                <ul>
                                    @foreach($product->varchar_values as $varchar )
                                    <li><i class="fa fa-play"></i>{!! $varchar->value !!}</li>
                                    @endforeach
                                    @foreach($product->int_values as $int)
                                    <li><i class="fa fa-play"></i>{!! $int->value !!}</li>
                                    @endforeach
                                    @foreach($product->text_values as $text)
                                    <li><i class="fa fa-play"></i>{!! $text->value !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="quantity">
                                <p>Quantity:</p>
                                <a href="#" class="minus"></a><input name="quantity" type="number" value="1"><a href="#" class="plus"></a>
                            </div>
                            <a href="{!! route('frontend.cart.instance', ['id' =>$product->id] ) !!}" class="button button-with-left-icon"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            <div class="categories">Categories: <a href="#">Default</a></div>
                        </div>
                    </div>
                </div>
                <!--/ product -->

                <!-- product tabs -->
                <div class="product-tabs">
                    <input type="radio" name="product-tabs" checked id="product-tab1" class="product-tab-content"><!--
							--><label for="product-tab1" class="first">Description</label><!--
							-->
							<input type="radio" name="product-tabs" id="product-tab2" class="product-tab-content2"><!--
							--><label for="product-tab3" class="last">Reviews (3)</label>
                    <div id="product-tab-content1" class="description">

                        {!! $product->product_translations[0]->long_description !!}
                    </div>
                    <div id="product-tab-content2">
                        <div class="comments">
                            <ul>

                                <li>
                                    <i class="fa fa-user"></i>
                                    <div class="text">
                                        <div class="author"><div class="rating"><span style="width:100%"></span></div><a href="#">Cobus Bester</a> &nbsp; June 7, 2014</div>
                                        <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <form action="#" class="add-comment">
                            <h2>Add a Review</h2>
                            <input type="text" placeholder="Your Name (required)">
                            <input type="email" placeholder="Your E-mail (required)">
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="rating-5">
                                <label for="rating-5"><i></i></label>
                                <input type="radio" name="rating" value="4" id="rating-4">
                                <label for="rating-4"><i></i></label>
                                <input type="radio" name="rating" value="3" id="rating-3">
                                <label for="rating-3"><i></i></label>
                                <input type="radio" name="rating" value="2" id="rating-2">
                                <label for="rating-2"><i></i></label>
                                <input type="radio" name="rating" value="1" id="rating-1">
                                <label for="rating-1"><i></i></label>
                                Your Rating
                            </div>
                            <textarea rows="10" placeholder="Your Review"></textarea>
                            <button type="submit" class="button button-alt">Send</button>
                        </form>
                    </div>
                </div>
                <!--/ product tabs -->

                <!-- products grid -->
                <section class="products-grid">
                    <h2>Related Products</h2>
                    <ul>
                        @if($products->count() )

                            @foreach ($products as $product)
                                <li>
                                    <div>
                                        <div class="pic">
                                            <img src="{!! config('app.url').'/app/innovate/product/'.$product->img_big !!}"  alt="{!! $product->product_translations[0]->name !!}">
                                            <span></span>
                                            <ul>
                                                <li><a href="pic/catalog-grid/item-1.jpg" class="fa fa-plus fancybox"></a></li>
                                                <li><a href="shop-product.html" class="fa fa-share"></a></li>
                                            </ul>
                                            <em></em>
                                        </div>
                                        <!--  <div class="sale">SALE!</div> -->
                                        <h3><a href="{!! route('product.show',$product->id) !!}">{!! $product->product_translations[0]->name !!}</a></h3>
                                        <div class="rating"><span style="width:80%"></span></div>
                                        <div class="price"> {!! $product->price !!} {!! $product->currency !!} </div>
                                        <div class="price" >( {!! googleCurrency($product->currency,'USD',$product->price) !!} )</div>


                                        <a href="{!! route('frontend.cart.instance', ['id' =>$product->id] ) !!}" class="button button-with-left-icon button-xsmall"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </li><!--
							-->

                            @endforeach
                        @endif
                    </ul>
                </section>
                <!--/ products grid -->
            </div>

            <div class="grid-col grid-col-3">
                @component_search()
                <!--/ widget search -->
                <!-- widget cart -->
                @component_shopping_cart()
                <!--/ widget cart -->

                <!-- widget categories -->
                @component_category()
                <!--/ widget categories -->

                <!--
                    @component_sellers()
                     widget sellers -->


                <!-- widget tags -->
                @component_tags()
                <!--/ widget tags -->
            </div>
        </div>
    </main>
    <!--/ page content -->



@endsection