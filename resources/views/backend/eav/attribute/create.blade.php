@extends ('backend.layouts.master')

@section ('title', trans('eav.eav_attribute_management') . ' | ' . trans('eav.create_eav_attribute'))

@section('page-header')
    <h1>
        {{ trans('eav.eav_attribute_management') }}
        <small>{{ trans('eav.create_eav_attribute') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.eav.attribute.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
    @include('backend.eav.attribute.includes.partials._form',[$pageName = 'create',$buttonText = trans('strings.save_button') ])
    {!! Form::close() !!}
@endsection