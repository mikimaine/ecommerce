@extends ('backend.layouts.master')

@section ('title', trans('product.product_management') . ' | ' . trans('product.menus.header_buttons.product.create_product'))

@section('page-header')
    <h1>
        {{ trans('product.product_management') }}
        <small>{{ trans('product.menus.header_buttons.product.create_product') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.product.store.non_downloadable','files' => true, 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
    @include('backend.Product.includes.partials._form_create_non_downloadable',[$pageName = 'create',$buttonText = trans('strings.save_button') ])
    {!! Form::close() !!}
@endsection
@section('after-scripts-end')
    {!! HTML::script('js/backend/plugin/ckeditor/ckeditor.js') !!}
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
            CKEDITOR.replace('editor3');
        });
    </script>
@stop