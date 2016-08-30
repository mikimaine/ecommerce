@extends ('backend.layouts.master')

@section ('title', trans('innovate.static_page.check_out_agreement_management'))

@section('page-header')
    <h1>
        {{ trans('innovate.static_page.check_out_agreement_management') }}
        <small>{{ trans('innovate.static_page.active_check_out_agreement') }}</small>
    </h1>
@endsection
@section('content')

    @include('backend.staticPage.check_out_agreement.includes.partials._table',[$pageName = 'index',$buttonText = trans('strings.update_button') ])

@stop