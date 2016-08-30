<div class="box box-success">
    <div class="box-header with-border">
        @if($pageName == 'index')
             <h3 class="box-title">{{ trans('innovate.static_page.active_bank_info') }}</h3>
        @elseif($pageName == 'deleted')
            <h3 class="box-title">{{ trans('innovate.static_page.deleted_bank_info') }}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.staticPage.bank_transfer.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>{{ trans('innovate.static_page.bankinfo_id') }}</th>
                    <th>{{ trans('innovate.static_page.bankinfo_name') }}</th>
                    <th>{{ trans('innovate.static_page.bankinfo_account_no') }}</th>
                    <th>{{ trans('innovate.static_page.bankinfo_support_phone') }}</th>
                    @if($pageName == 'index')
                        <td class="visible-lg">{{ trans('innovate.static_page.bankinfo_description') }}</td>
                    @elseif($pageName == 'deleted')
                        <th class="visible-lg">{{ trans('tax.tax_deleted') }}</th>
                    @endif
                    <th class="visible-lg">{{ trans('tax.tax_created') }}</th>
                    <th class="visible-lg">{{ trans('tax.tax_updated') }}</th>
                    <th>{{ trans('crud.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @if($banks->count() )
                    @foreach ($banks as $bank)
                        <tr>
                            <td>{!! $bank->id !!}</td>
                            <td>{!! $bank->bank_name !!}</td>
                            <td>{!! $bank->bank_account_no !!}</td>
                            <td>{!! $bank->support_phone !!}</td>
                            @if($pageName == 'index')
                                <td class="visible-lg">{!! $bank->description !!}</td>
                            @elseif($pageName == 'deleted')
                                <td class="visible-lg">{!! $bank->deleted_at->diffForHumans() !!}</td>
                            @endif

                            <td class="visible-lg">{!! $bank->created_at->diffForHumans() !!}</td>
                            <td class="visible-lg">{!! $bank->updated_at->diffForHumans() !!}</td>
                            @if($pageName == 'index')
                                <td>{!! $bank->getActionButtonsAttribute() !!}</td>
                            @elseif($pageName == 'deleted')
                                <td>
                                    <a href="{{route('admin.bank_transfer_info.restore', $bank->id)}}" class="btn btn-xs btn-success" name="restore_user"><i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.users.restore_user') }}"></i></a>
                                    <a href="{{route('admin.bank_transfer_info.delete-permanently', $bank->id)}}" class="btn btn-xs btn-danger" name="delete_user_perm"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.users.delete_permanently') }}"></i></a>

                                </td>
                            @endif

                        </tr>
                    @endforeach
                @else
                    <td colspan="9">{{ trans('innovate.static_page.no_bankinfo') }}</td>
                @endif
                </tbody>
            </table>
        </div>

        <div class="pull-left">
            {!! $banks->count() !!} {{ trans('innovate.static_page.bankinfo_total') }}
        </div>

        <div class="pull-right">

        </div>

        <div class="clearfix"></div>
    </div><!-- /.box-body -->
</div><!--box-->