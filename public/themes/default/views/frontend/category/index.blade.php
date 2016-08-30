@extends('default::layout.layout')

@section('content')
    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">
            <div class="grid-col grid-col-9">
                <div class="clearfix">
                    <p class="woocommerce-result-count"></p>

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
                <section class="products-grid grid-row ">
                    <ul>
                        @if($categorys->count() )
                            @foreach ($categorys as $category)
                                @foreach ($category->category_description->category_description_translations as $trans)
                                <li>
                                    <div>
                                        <div class="pic">
                                            <img src="{!! config('app.url').'/app/innovate/product/'.$category->image !!}"  alt="{!! $trans->name !!}">
                                            <span></span>
                                                <ul>
                                                <li>{!! $trans->description !!}</li>

                                            </ul>
                                            <em></em>
                                        </div>
                                        <!--  <div class="sale">SALE!</div> -->
                                        <h3><a href="shop-product.html">{!! $trans->name !!}</a></h3>
                                        <div class="rating"><span style="width:80%"></span></div>

                                        <a href="#" class="button button-with-left-icon button-xsmall">View More</a>
                                    </div>
                                </li><!--
							-->
                                    @endforeach

                             @endforeach
                        @endif

                    </ul>

                </section>
                <!--/ products grid -->

                <!-- pager -->
                    {!! with(new Innovate\Pagination\HDPresenter($categorys))->render(); !!}
                <!--/ pager -->
            </div>

            <div class="grid-col grid-col-3">
                <div class="widget-area">
                    @component_search()
                    <!--/ widget search -->
                    <!-- widget cart -->
                    @component_shopping_cart()
                    <!--/ widget cart -->

                    <!-- widget categories -->
                    @component_category()
                    <!--/ widget categories -->

                    <!-- widget tags -->
                    @component_tags()
                    <!--/ widget tags -->




                </div>
            </div>
        </div>
    </main>
    <!--/ page content -->
@endsection