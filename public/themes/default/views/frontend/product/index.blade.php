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

                <!-- pager -->
                {!! with(new Innovate\Pagination\HDPresenter($products))->render(); !!}
                <!--/ pager -->
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
        </div>
    </main>
    <!--/ page content -->
@endsection