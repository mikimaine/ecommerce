@extends ('backend.layouts.master')

@section ('title', trans('innovate.static_page.bank_info_management'))

@section('page-header')
    <h1>
        {{ trans('innovate.static_page.bank_info_management') }}
        <small>{{ trans('innovate.static_page.active_bank_info') }}</small>
    </h1>
@endsection
@section('content')

    @include('backend.staticPage.bank_transfer.includes.partials._table',[$pageName = 'index',$buttonText = trans('strings.update_button') ])

@stop