@extends ('backend.layouts.master')

@section ('title', trans('tax.tax_management'))



@section('page-header')
    <h1>
        {{ trans('tax.tax_management') }}
        <small>{{ trans('tax.active_tax') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('tax.active_tax') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.tax.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
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
                    @if($taxs->count() )
                    @foreach ($taxs as $tax)
                        <tr>
                            <td>{!! $tax->id !!}</td>
                            <td>{!! $tax->name !!}</td>
                            <td>{!! $tax->rate !!}</td>
                            <td class="visible-lg">{!! $tax->created_at->diffForHumans() !!}</td>
                            <td class="visible-lg">{!! $tax->updated_at->diffForHumans() !!}</td>
                            <td>{!! $tax->getActionButtonsAttribute() !!}</td>
                        </tr>
                    @endforeach
                        @else
                        <td colspan="9">{{ trans('tax.no_tax') }}</td>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {!! $taxs->count() !!} {{ trans('tax.tax_total') }}
            </div>

            <div class="pull-right">

            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop