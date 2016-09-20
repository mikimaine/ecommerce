@extends ('backend.layouts.master')

@section ('title', trans('innovate.static_page.check_out_agreement_management'))

@section('page-header')
    <h1>
        {{ trans('innovate.static_page.check_out_agreement_management') }}
        <small>{{ trans('innovate.static_page.active_check_out_agreement') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.bank_transfer_info.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
        @include('backend.staticPage.check_out_agreement.includes.partials._form',[$pageName = 'create',$buttonText = trans('strings.save_button') ])
    {!! Form::close() !!}
@endsection