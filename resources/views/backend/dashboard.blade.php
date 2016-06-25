@extends('backend.layouts.master')

@section('page-header')
    <h1>
      INNOVATE E-commerce Back end
        <small>{{ trans('strings.backend.dashboard_title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.WELCOME') }} {!! auth()->user()->name !!}!</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            @include('backend.lang.' . app()->getLocale() . '.welcome')
        </div><!-- /.box-body -->
    </div><!--box box-success-->

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('activity.most_recent_activity') }}</h3>
            <div class="box-tools pull-right">
                <a href=" {{ route('admin.activity_log.flush') }}" class="btn btn-xs btn-danger">{{ trans('activity.flush_log') }}</a>
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('activity.activity_id') }}</th>
                        <th>{{ trans('activity.activity_content') }}</th>
                        <th>{{ trans('activity.ip_address_requested') }}</th>
                        <th>{{ trans('activity.requested_by') }}</th>
                        <th class="visible-lg">{{ trans('tax.tax_created') }}</th>
                        <th class="visible-lg">{{ trans('tax.tax_updated') }}</th>
                        <th>{{ trans('crud.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($activities->count() )
                        @foreach ($activities as $activitie)
                            <tr>
                                <td>{!! $activitie->id !!}</td>
                                <td>{!! $activitie->text !!}</td>
                                <td>{!! $activitie->ip_address !!}</td>
                                <td>   @if (isset($activitie->user->name) )
                                        {!! $activitie->user->name !!}
                                        @else
                                        Guest
                                           @endif
                                        </td>
                                <td class="visible-lg">{!! $activitie->created_at->diffForHumans() !!}</td>
                                <td class="visible-lg">{!! $activitie->updated_at->diffForHumans() !!}</td>
                                <td> <a href=" {{ route('admin.activity_log.destroy', $activitie->id) }}" data-method="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="{!! trans('crud.delete_button') !!} "></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9">{{ trans('tax.no_tax') }}</td>
                    @endif
                    </tbody>
                </table>
            </div>

        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection