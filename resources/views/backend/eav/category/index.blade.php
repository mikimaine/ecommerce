@extends ('backend.layouts.master')


@section ('title',trans('eav.eav_category_management'))

@section('after-styles-end')
    {!! HTML::style('css/backend/plugin/datatables/dataTables.bootstrap.css') !!}
@endsection

@section('page-header')
    <h1>
        {{ trans('eav.eav_category_management') }}
        <small>{{ trans('eav.active_eav_category') }}</small>
    </h1>
@endsection


@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('eav.active_eav_category') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.eav.category.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('eav.eav_attribute_id') }}</th>
                        <th>{{ trans('eav.eav_attribute_title') }}</th>

                        <th class="visible-lg">{{ trans('tax.tax_created') }}</th>
                        <th class="visible-lg">{{ trans('tax.tax_updated') }}</th>
                        <th>{{ trans('crud.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($productattributecategorys->count() )
                        @foreach ($productattributecategorys as $productattributecategory)
                            <tr id="attribute">
                                <td>{!! $productattributecategory->id !!}</td>
                                <td  ><a href="  {!! route('admin.eav.attribute.show', $productattributecategory->id) !!} " > {!! $productattributecategory->attribute_set_name !!}</a> </td>

                                <td class="visible-lg">{!! $productattributecategory->created_at->diffForHumans() !!}</td>
                                <td class="visible-lg">{!! $productattributecategory->updated_at->diffForHumans() !!}</td>
                                <td>{!! $productattributecategory->getActionButtonsAttribute() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9">{{ trans('tax.no_tax') }}</td>
                    @endif
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {!! $productattributecategorys->count() !!} {{ trans('eav.eav_category_total') }}
            </div>

            <div class="pull-right">

            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->


@stop

@section('after-scripts-end')
    {!! HTML::script('css/backend/plugin/datatables/jquery.dataTables.min.js') !!}
    {!! HTML::script('css/backend/plugin/datatables/dataTables.bootstrap.min.js') !!}
    <script>
        $(function () {
            $('#datatable1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": true
            });
        });
    </script>

@endsection