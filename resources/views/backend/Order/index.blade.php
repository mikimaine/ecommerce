@extends ('backend.layouts.master')

@section ('title', trans('order.order_management'))



@section('page-header')
    <h1>
        {{ trans('order.order_management') }}
        <small>{{ trans('order.active_order') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('order.active_order') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.Order.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('order.order_id') }}</th>
                        <th>Product</th>
                        <th>{{ trans('order.order_name') }}</th>
                        <th>{{ trans('order.order_rate') }}</th>
                        <th>phone</th>
                        <th>No of Products</th>
                        <th >{{ trans('order.price') }}</th>
                        <th class="visible-lg">{{ trans('order.order_updated') }}</th>
                        <th>{{ trans('crud.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($orders->count() )
                        @foreach ($orders as $order)
                            <tr>
                                <td>{!! $order->id !!}</td>
                                <td> {!! $order->product->name !!}</td>
                                <td>{!! $order->firstname.$order->lastname !!}</td>
                                <td>{!! $order->email !!}</td>
                                <td>{!! $order->telephone !!}</td>
                                <td >{!! $order->no_of_product !!}</td>
                                <td >{!! $order->total_price !!}</td>
                                <td class="visible-lg">{!! $order->updated_at->diffForHumans() !!}</td>
                                <td>{!! $order->getActionButtonsAttribute() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9">{{ trans('order.no_order') }}</td>
                    @endif
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {!! $orders->count() !!} {{ trans('order.order_total') }}
            </div>

            <div class="pull-right">

            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop