@extends ('backend.layouts.master')

@section ('title', trans('product.product_management') . ' | ' . trans('product.menus.header_buttons.product.create_product'))

@section('page-header')
    <h1>
        {{ trans('product.product_management') }}
        <small>{{ trans('product.menus.header_buttons.product.create_product') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.product.newProduct', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
    @include('backend.Product.includes.partials._form',[$pageName = 'create',$buttonText = trans('strings.save_button') ])
    {!! Form::close() !!}
@endsection