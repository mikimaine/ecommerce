<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', app_name())</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('author', 'http://www.tmgproduction.com  Miki Maine Amdu')">
    <meta name="keywords" content="">
    @yield('meta')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    @yield('before-styles-end')
    <link href="{{ Theme::asset('default::css/frontend.css') }}" rel="stylesheet">
    @yield('after-styles-end')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="page">
    @include('default::layout/header')
    <div class="grid-row">
        <br /><br />
        @yield('body_title')

        <div class=" composer">
            @include('default::includes/partials/messages')
        </div>
    </div>
    @yield('content')

    @include('default::layout/footer')

    <a href="#" id="scroll-top" class="scroll-top fa fa-angle-up"></a>
</div>



<script src="{{ Theme::asset('default::js/frontend.js') }}"></script>

<!--/ scripts -->

</body>
</html>