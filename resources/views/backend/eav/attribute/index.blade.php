@extends ('backend.layouts.master')

@section ('title', trans('eav.eav_attribute_management'))

@section('after-styles-end')
    {!! HTML::style('css/backend/plugin/datatables/dataTables.bootstrap.css') !!}
@endsection

@section('page-header')
    <h1>
        {{ trans('eav.eav_attribute_management') }}
        <small>{{ trans('eav.active_eav_attribute') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('eav.active_eav_attribute') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.eav.attribute.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('eav.eav_attribute_id') }}</th>
                        <th>{{ trans('eav.eav_attribute_title') }}</th>
                        <th>{{ trans('eav.eav_attribute_category_name') }}</th>
                        <th>{{ trans('eav.eav_attribute_datatype') }}</th>
                        <th>{{ trans('eav.eav_attribute_notnull') }} ?</th>
                        <th class="visible-lg">{{ trans('tax.tax_created') }}</th>
                        <th class="visible-lg">{{ trans('tax.tax_updated') }}</th>
                        <th>{{ trans('crud.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($attributes->count() )
                        @foreach ($attributes as $attribute)
                            <tr id="attribute">
                                <td>{!! $attribute->id !!}</td>
                                <td>{!! $attribute->title !!}</td>
                                <td><a href="  {!! route('admin.eav.category.show', $attribute->product_attribute_category->id) !!} " >{!! $attribute->product_attribute_category->attribute_set_name !!}</a></td>
                                    @if($attribute->datatype == 'product_attribute_varchar')
                                    <td>   Varchar </td>
                                    @elseif($attribute->datatype == 'product_attribute_text')
                                        <td>Long Text</td>
                                    @elseif($attribute->datatype == 'product_attribute_int')
                                        <td>Integer</td>
                                     @else
                                        <td>{!! $attribute->datatype !!}</td>
                                    @endif
                                @if($attribute->notnull)
                                    <td>  <span class="label label-success"> Yes </span> </td>
                                @else
                                    <td>  <span class="label label-danger">No </span>  </td>
                                @endif
                                <td class="visible-lg">{!! $attribute->created_at->diffForHumans() !!}</td>
                                <td class="visible-lg">{!! $attribute->updated_at->diffForHumans() !!}</td>
                                <td>{!! $attribute->getActionButtonsAttribute() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9">{{ trans('tax.no_tax') }}</td>
                    @endif
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {!! $attributes->count() !!} {{ trans('eav.eav_attribute_total') }}
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