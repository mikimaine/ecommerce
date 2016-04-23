@extends ('backend.layouts.master')

@section('meta')
    {!! app('seotools')->generate() !!}
@endsection

@section('page-header')
    <h1>
        {{ $category->category_description->name }}

    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
        <div class="box box-primary">
        <div class=" box-body box-profile ">
            @if($category->image != 'default.jpg')
            <img class="profile-user-img img-responsive img-rectangle" src="{!! config('app.url').'/app/innovate/product/'.$category->image !!} " alt=" {{ $category->category_description->name }}"/>
            <a href=""><span class="label label-danger">Remove image  </span></a>
            @else
                <img class="profile-user-img img-responsive img-rectangle" src="{!! config('app.url').'/app/innovate/product/'.$category->image !!} " alt=" {{ $category->category_description->name }}"/>

            @endif

            <h3 class="profile-username text-center">{{ $category->category_description->name }}</h3>
            <a href="#" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="bottom" title="This will also delete all sub category's and products inside it !" ><b>Delete Catagory</b></a>
        </div><!-- box-body box-profile-->

            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About {{ $category->category_description->name }}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Created at</strong>
                    <p class="text-muted">
                        {{ $category->created_at->diffForHumans() }}
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Description</strong>
                    <p>{{ $category->category_description->description }}.</p>
                </div><!-- /.box-body -->
            </div>
        </div>

        <div class="col-md-9">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#activity" data-toggle="tab">General Information</a></li>
                    <li class=""><a aria-expanded="false" href="#timeline" data-toggle="tab">Category Products</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                        {!! Form::model($category->category_description,['route' =>[ 'admin.category.update',$category->id],'files' => true, 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}
                        @include('backend.category.includes.partials._form',[$pageName = 'update',$buttonText = trans('strings.save_button') ])
                        {!! Form::close() !!}

                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>{{ trans('tax.tax_id') }}</th>
                                    <th>{{ trans('tax.tax_name') }}</th>
                                    <th>{{ trans('tax.tax_rate') }}</th>
                                    <th class="visible-lg">{{ trans('tax.tax_created') }}</th>
                                    <th class="visible-lg">{{ trans('tax.tax_updated') }}</th>
                                    <th>{{ trans('crud.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.tab-pane -->


                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div>
    </div>

@endsection