@extends('default::layout.layout')

@section('content')

    <main class="page-content">
        <div class="grid-row">
            <div class="grid-col grid-col-9">
                <div class="clearfix">
                    <p class="woocommerce-result-count">Showing 1–10 of {!! $results->count() !!} results</p>

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
               <section class="page-content">

                   <div class="widget  grid-row composer">
                       <div class="widget widget-search grid-col-6">
                           <form action="" method="get">
                               <input type="text" name="q" placeholder="Search">
                               <button type="submit"></button>
                               <i class="fa fa-search"></i>
                           </form>
                       </div>
                       <br><br>
                       <h2 class="">Search Result</h2>
                       <p class="">search results are fetched with a complex relevance algorithm  .</p>

                       <br><br>

                        @if($results->count() )
                       <div class="widget widget-cart">
                           <div class="cont">
                               <ul>

                            @foreach ($results as $result)

                               <li>
                                   <a href="#"><img src="{!! config('app.url').'/app/innovate/product/'.$result->img_big !!}" width="100" height="100" alt="{!! $result->product_translations[0]->name !!}"></a>
                                   <h4><a href="{!! route('product.show',$result->id) !!}">{!! $result->product_translations[0]->name !!}</a></h4>
                                   <p> {!! $result->price.' ('.googleCurrency($result->currency,'USD',$result->price).')' !!}</p>
                                   <p> {!! $result->product_translations[0]->short_description !!}</p>

                               </li>



                            @endforeach
                            </ul>
                               </div>
                            </div>
                        @endif
                   </div>


                </section>
                <!--/ products grid -->

                <!-- pager -->

                <!--/ pager -->
            </div>


        </div>
        </div>
    </main>
    <!--/ page content -->
@endsection