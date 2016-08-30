@extends ('backend.layouts.master')

@section ('title', trans('eav.eav_category_management') . ' | ' . trans('eav.create_eav_attribute'))

@section('page-header')
    <h1>
        {{ trans('eav.eav_category_management') }}
        <small>{{ trans('eav.create_eav_attribute') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.category.store','files' => true, 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
    @include('backend.category.includes.partials._form',[$pageName = 'create',$buttonText = trans('strings.save_button') ])
    {!! Form::close() !!}
@endsection