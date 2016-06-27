@extends('default::layout.layout')



@section('content')

    <!-- page content -->
    <main class="page-content">
        <div class="grid-row">


             <div class="grid-col grid-col-9 composer">
                 <h1>{{ trans('cart.guest_checkout') }}</h1>

                 {!! Form::open(['route' => 'cart.guestRegister', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                 <div class="feedback  grid-col-4">
                     <h3>Personal Information</h3>
                        <div class="form-group">
                         {!! Form::label('firstname', trans('cart.customer_infor.firstname'), ['class' => 'col-md-4 control-label']) !!}
                         <div class="col-md-6">
                             {!! Form::input('firstname', 'firstname', old('firstname'), ['class' => 'form-control']) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         {!! Form::label('lastname', trans('cart.customer_infor.lastname'), ['class' => 'col-md-4 control-label']) !!}
                         <div class="col-md-6">
                             {!! Form::input('lastname', 'lastname', old('lastname'), ['class' => 'form-control']) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         {!! Form::label('secondary_email', trans('cart.customer_infor.secondary_email'), ['class' => 'col-md-4 control-label']) !!}
                         <div class="col-md-6">
                             {!! Form::input('secondary_email', 'secondary_email', old('secondary_email'), ['class' => 'form-control']) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         {!! Form::label('telephone', trans('cart.customer_infor.telephone'), ['class' => 'col-md-4 control-label']) !!}
                         <div class="col-md-6">
                             {!! Form::input('telephone', 'telephone', old('telephone'), ['class' => 'form-control']) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         {!! Form::label('fax', trans('cart.customer_infor.fax'), ['class' => 'col-md-4 control-label']) !!}
                         <div class="col-md-6">
                             {!! Form::input('fax', 'fax', old('fax'), ['class' => 'form-control']) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         {!! Form::label('phone', trans('cart.customer_infor.phone'), ['class' => 'col-md-4 control-label']) !!}
                         <div class="col-md-6">
                             {!! Form::input('phone', 'phone', old('phone'), ['class' => 'form-control']) !!}
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                             {!! Form::submit(trans('cart.checkout'), ['class' => 'btn btn-primary']) !!}
                         </div>
                     </div>

                 </div>
                 <div  class="feedback  grid-col-2">



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