<div class="box box-success">
    <div class="box-header with-border">
        @if($pageName == 'index')
             <h3 class="box-title">{{ trans('innovate.static_page.check_out_agreement_management') }}</h3>
        @elseif($pageName == 'deleted')
            <h3 class="box-title">{{ trans('innovate.static_page.deleted_bank_info') }}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.staticPage.check_out_agreement.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>{{ trans('innovate.static_page.check_out_agreement_id') }}</th>
                    <th>{{ trans('innovate.static_page.check_out_agreement_name') }}</th>
                    <th>{{ trans('innovate.static_page.check_out_agreement_content') }}</th>
                    @if($pageName == 'index')
                        <td class="visible-lg">{{ trans('innovate.static_page.check_out_agreement_isactive') }}</td>
                    @elseif($pageName == 'deleted')
                        <th class="visible-lg">{{ trans('tax.tax_deleted') }}</th>
                    @endif
                    <th class="visible-lg">{{ trans('tax.tax_created') }}</th>
                    <th class="visible-lg">{{ trans('tax.tax_updated') }}</th>
                    <th>{{ trans('crud.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @if($checkouts->count() )
                    @foreach ($checkouts as $checkout)
                        <tr>
                            <td>{!! $checkout->id !!}</td>
                            <td>{!! $checkout->name !!}</td>
                            <td>{!! $checkout->content !!}</td>
                            @if($pageName == 'index')
                                <td>{!! $checkout->is_active !!}</td>
                            @elseif($pageName == 'deleted')
                                <td class="visible-lg">{!! $checkout->deleted_at->diffForHumans() !!}</td>
                            @endif

                            <td class="visible-lg">{!! $checkout->created_at->diffForHumans() !!}</td>
                            <td class="visible-lg">{!! $checkout->updated_at->diffForHumans() !!}</td>
                            @if($pageName == 'index')
                                <td>{!! $checkout->getActionButtonsAttribute() !!}</td>
                            @elseif($pageName == 'deleted')
                                <td>
                                    <a href="{{route('admin.check_out_agreement.restore', $checkout->id)}}" class="btn btn-xs btn-success" name="restore_user"><i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.users.restore_user') }}"></i></a>
                                    <a href="{{route('admin.check_out_agreement.delete-permanently', $checkout->id)}}" class="btn btn-xs btn-danger" name="delete_user_perm"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.users.delete_permanently') }}"></i></a>

                                </td>
                            @endif

                        </tr>
                    @endforeach
                @else
                    <td colspan="9">{{ trans('innovate.static_page.no_check_out_agreement') }}</td>
                @endif
                </tbody>
            </table>
        </div>

        <div class="pull-left">
            {!! $checkouts->count() !!} {{ trans('innovate.static_page.check_out_agreement_total') }}
        </div>

        <div class="pull-right">

        </div>

        <div class="clearfix"></div>
    </div><!-- /.box-body -->
</div><!--box-->