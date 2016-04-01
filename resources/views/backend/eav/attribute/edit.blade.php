@extends ('backend.layouts.master')

@section ('title', trans('eav.eav_attribute_management')  . ' | ' . trans('eav.update_eav_attribute'))

@section('page-header')
    <h1>
        {{ trans('eav.eav_attribute_management') }}
        <small>{{ trans('eav.update_eav_attribute') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::model($attribute,['route' => ['admin.eav.attribute.update',$attribute->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) !!}
    @include('backend.eav.attribute.includes.partials._form',[$pageName = 'update',$buttonText = trans('strings.update_button') ])
    {!! Form::close() !!}

@endsection