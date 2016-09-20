@extends ('backend.layouts.master')

@section ('title', trans('innovate.static_page.bank_info_management'))

@section('page-header')
    <h1>
        {{ trans('innovate.static_page.bank_info_management') }}
        <small>{{ trans('innovate.static_page.active_bank_info') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::model($bank,['route' => ['admin.check_out_agreement.update',$bank->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) !!}
              @include('backend.staticPage.bank_transfer.includes.partials._form',[$pageName = 'update',$buttonText = trans('strings.update_button') ])
    {!! Form::close() !!}

@endsection