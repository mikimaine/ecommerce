@extends ('backend.layouts.master')

@section('content')


    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('tax.active_tax') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.product.includes.partials.header-buttons')
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
                    @if($products->count() )
                        @foreach ($products as $product)
                            <tr>
                                <td>{!! $product->id !!}</td>
                                <td>{!! $product->name !!}</td>
                                <td>{!! $product->price !!}</td>
                                <td class="visible-lg">{!! $product->created_at->diffForHumans() !!}</td>
                                <td class="visible-lg">{!! $product->updated_at->diffForHumans() !!}</td>
                                <td>{!! $product->location !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9">{{ trans('tax.no_tax') }}</td>
                    @endif
                    </tbody>
                </table>
            </div>


    <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
    @endsection
