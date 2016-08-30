@extends('default::layout/layout')

@section('content')
    <main class="page-content-alt-2">
        <div class="grid-row">
            <h1>{{ trans('labels.login_box_title') }}</h1>
        </div>

        <div class="grid-row">
            <div class="grid-col grid-col-6">
                <!-- feedback -->
                <div class="feedback">

                    <div class="composer">
                        <div id="email_server_responce"></div>
                    </div>

                    <form method="POST" action="{!! config('app.url').'/auth/login' !!}">
                        {!! csrf_field() !!}
                        <label> Email: </label>
                        <input type="email" name="email" value="{{ old('email') }}">
                        <label> Password: </label>
                        <input type="password" name="password" id="password">
                        <label>{{ trans('labels.remember_me') }}</label>
                        <input type="checkbox" name="remember">
                        <button type="submit" class="button">{!! trans('labels.login_button') !!}</button>
                    </form>

                    <!--/ feedback -->
                </div>
            </div>

        </div>
    </main>
@endsection