@extends('default::layout.layout')



@section('content')

    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">

 @if (Auth::guest())
             <div class="grid-col grid-col-9 composer">
                 <h1>{{ trans('cart.checkout') }}</h1>

                 <div class="callout callout-alt2">
                     <h2>{{ trans('cart.dont_create_account') }}</h2>
                     <h3>{{ trans('cart.processed_to_checkout') }}</h3>
                     {!! link_to('cart/guestCheckout', trans('cart.guest_checkout'),array('class'=>'button button-xlarge fa fa-share')) !!}

                 </div>

                 <div class="callout">
                 <h2>{{ trans('cart.dont_have_account') }}</h2>
                 <h3>{{ trans('cart.have_access_to_every_feature') }}</h3>
                     {!! link_to('auth/login', trans('navs.login'),array('class'=>'button button-left')) !!}
                     {!! link_to('auth/register', trans('navs.register'),array('class'=>'button button-alt button-righ')) !!}

             </div>
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
                 </div>
             </div>
 @else





 @endif
        </div>
    </main>
    <!--/ page content -->

@endsection