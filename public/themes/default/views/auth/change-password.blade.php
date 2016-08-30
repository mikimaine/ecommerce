@extends('default::layout/layout')

@section('content')
    <main class="page-content-alt-2">
    <div class="grid-row">


        <h1>{{ trans('labels.change_password_box_title') }}</h1>
    </div>

    <div class="grid-row">
        <div class="grid-col grid-col-6">

            <!-- feedback -->
            <div class="feedback">

                <div class="composer">


                    {!! Form::open(['route' => ['password.change'], 'class' => 'form-horizontal']) !!}


                    {!! Form::label('old_password', trans('validation.attributes.old_password'), ['class' => 'col-md-4 control-label']) !!}

                    {!! Form::input('password', 'old_password', null, ['class' => 'form-control']) !!}

                    {!! Form::label('password', trans('validation.attributes.new_password'), ['class' => 'col-md-4 control-label']) !!}

                    {!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}

                    {!! Form::label('password_confirmation', trans('validation.attributes.new_password_confirmation'), ['class' => 'col-md-4 control-label']) !!}

                    {!! Form::input('password', 'password_confirmation', null, ['class' => 'form-control']) !!}

                    {!! Form::submit(trans('labels.change_password_button'), ['class' => 'button button-alt button-small']) !!}


                    {!! Form::close() !!}

                </div>
                <!--/ feedback -->
            </div></div>

        <div class="grid-col grid-col-6">
            <!-- contacts -->
            <div class="contacts">
                <h3>Our Offices</h3>
                <p>Duis sed diam ipsum. Quisque congue odio id ipsum pharetra feugiat. Nam volutpat dui vitae felis vestibulum bibendum. Phasellus hendrerit, metus eget consectetur aliquam, nisl massa facilisis nisi, vel sagittis sem tellus eget magna. Nullam ac ligula in leo volutpat dignissim. Praesent interdum quis quam vitae mollis. Proin sit amet bibendum dui.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus ultricies euismod. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                <p><span>Address:</span>Interdum et malesuada fames ac ante ipsum primis in faucibus malesuada</p>
                <p><span>Phone number:</span>(123) 456-7890<br>(123) 456-7891</p>
                <p><span>E-mail:</span>info@your-site.com,<br>sales@your-site.com</p>
                <p><span>Social links:</span></p>
                <div class="links clearfix">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-skype"></a>
                    <a href="#" class="fa fa-rss"></a>
                    <a href="#" class="fa fa-dribbble"></a>
                </div>
            </div>
            <!--/ contacts -->
        </div>


    </div>

</main>
@endsection