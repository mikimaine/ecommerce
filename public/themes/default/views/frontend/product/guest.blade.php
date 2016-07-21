@extends('default::layout.layout')



@section('content')

    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">


             <div class="grid-col grid-col-9 composer">
                 <h1>{{ trans('cart.guest_checkout') }}</h1>

                 {!! Form::open(['route' => 'cart.guestRegister', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                 <div class="grid-col  grid-col-4 widget-alt widget-alt-feedback">
                     <div class="head">Personal Information</div>
                     <div class="cont">
                        <div class="form-group">
                         <div class="col-md-6">
                             {!! Form::input('firstname', 'firstname', old('firstname'), ['class' => 'form-control','placeholder'=>trans('cart.customer_infor.firstname')]) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6">
                             {!! Form::input('lastname', 'lastname', old('lastname'), ['class' => 'form-control','placeholder'=>trans('cart.customer_infor.lastname')]) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6">
                             {!! Form::input('secondary_email', 'secondary_email', old('secondary_email'), ['class' => 'form-control','placeholder'=>trans('cart.customer_infor.secondary_email')]) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6">
                             {!! Form::input('telephone', 'telephone', old('telephone'), ['class' => 'form-control','placeholder'=>trans('cart.customer_infor.telephone')]) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6">
                             {!! Form::input('fax', 'fax', old('fax'), ['class' => 'form-control','placeholder'=>trans('cart.customer_infor.fax')]) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6">
                             {!! Form::input('phone', 'phone', old('phone'), ['class' => 'form-control','placeholder'=>trans('cart.customer_infor.phone')]) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                             {!! Form::submit(trans('cart.checkout'), ['class' => 'btn btn-primary']) !!}
                         </div>
                     </div>

                 </div></div>
                 <div  class="grid-col  grid-col-2">
                     <div class="widget-alt widget-alt-feedback">
                         <div class="head">Credit Card Information</div>
                         <div class="cont">
                             <form action="http://html.creaws.com/the8/php/contacts-process.php" method="post" id="widget-form">
                                 <input type="text" data-strip="number" placeholder="Credit Card No">
                                 <input type="email" name="email" placeholder="E-mail">
                                 <textarea cols="30" rows="5" name="message" placeholder="Message"></textarea>
                                 <div id="widget_server_responce"></div>
                                 <div class="buttons">
                                     <button type="reset">Reset</button><!--
										--><button type="submit">{!! trans('cart.checkout') !!}</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>

                 {!! Form::close() !!}

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

        </div>
    </main>
    <!--/ page content -->

@endsection