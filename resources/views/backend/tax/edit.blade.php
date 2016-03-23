@extends ('backend.layouts.master')

@section ('title', trans('tax.tax_management') . ' | ' . trans('menus.create_user'))

@section('page-header')
    <h1>
        {{ trans('tax.tax_management') }}
        <small>{{ trans('tax.update_tax') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::model($tax,['route' => ['admin.tax.update',$tax->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) !!}
              @include('backend.tax.includes.partials._form',[$pageName = 'update',$buttonText = trans('strings.update_button') ])
    {!! Form::close() !!}

@endsection