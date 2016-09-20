@extends ('backend.layouts.master')

@section ('title', trans('tax.tax_management') . ' | ' . trans('menus.create_user'))

@section('page-header')
    <h1>
        {{ trans('tax.tax_management') }}
        <small>{{ trans('tax.create_tax') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.tax.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
        @include('backend.tax.includes.partials._form',[$pageName = 'create',$buttonText = trans('strings.save_button') ])
    {!! Form::close() !!}
@endsection