@extends ('backend.layouts.master')


@section ('title',trans('eav.eav_category_management'))

@section('after-styles-end')
    {!! HTML::style('css/backend/plugin/datatables/dataTables.bootstrap.css') !!}
    {!! HTML::style('css/backend/plugin/nestable/jquery.nestable.css') !!}
@endsection


@section('page-header')
    <h1>
        {{ trans('eav.eav_category_management') }}
        <small>{{ trans('eav.active_eav_category') }}</small>
    </h1>
@endsection
@section('content')
    <div class="row">
    <div class="col-lg-6">
        <div class="alert alert-info">
            <i class="fa fa-info-circle"></i> Here are the list of Attribute(s) in this particular Attribute Category.<br />
            <a href="{{route('admin.eav.attribute.create')}}"><i class="fa fa-plus"> </i> Add New Attribute to this category</a>
            <a class="pull-right" href="{{route('admin.eav.category.index')}}"><i class="fa fa-retweet"> </i> Back to All Attribute category</a>
        </div><!--alert info-->

        <div class="dd permission-hierarchy">
            <ol class="dd-list">
                    <li class="dd-item" data-id="{!! $category->id !!}">
                        <div class="dd-handle">{!! $category->attribute_set_name !!}  <span class="pull-right">{!! $category->product_attributes->count() !!} Attributes</span></div>
                        @if ($category->product_attributes->count())
                            <ol class="dd-list">
                                @foreach($category->product_attributes as $cat)
                                    <li class="dd-item" data-id="{!! $cat->id !!}">
                                        <div class="dd-handle">{!! $cat->title !!} { {!! $cat->datatype!!} } <span class="pull-right">{!! $cat->notnull ? "NotNull" : "NULL" !!} </span></div>
                                    </li>
                                @endforeach
                            </ol>
                    </li>
                    @else

                    @endif
            </ol>
        </div><!--master-list-->
    </div><!--col-lg-4-->
</div>
    @endsection
@section('after-scripts-end')
    {!! HTML::script('js/backend/plugin/nestable/jquery.nestable.js') !!}

    <script>
        $(function() {
            var hierarchy = $('.permission-hierarchy');
            hierarchy.nestable({maxDepth:2});

            hierarchy.on('change', function() {
                toastr.info("For Now Don't touch those Positions!!");
                /*
                @permission('sort-permission-groups')
                $.ajax({
                    url : "{!! route('admin.access.roles.groups.update-sort') !!}",
                    type: "post",
                    data : {data:hierarchy.nestable('serialize')},
                    success: function(data) {
                        if (data.status == "OK")
                            toastr.success("Hierarchy successfully saved.");
                        else
                            toastr.error("An unknown error occurred.");
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        toastr.error("An unknown error occurred: " + errorThrown);
                    }
                });
                @else
                    toastr.error("You do not have permission to do that.");
                @endauth
                */
            });
        });
    </script>
@stop