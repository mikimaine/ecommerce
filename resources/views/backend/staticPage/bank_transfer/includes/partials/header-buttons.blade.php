    <div class="pull-right" style="margin-bottom:10px">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              {{ trans('innovate.static_page.bankinfo') }} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.bank_transfer_info.index')}}">{{ trans('innovate.static_page.all_bankinfo') }}</a></li>

            @permission('create-users')
                <li><a href="{{route('admin.bank_transfer_info.create')}}">{{ trans('innovate.static_page.create_bankinfo') }}</a></li>
            @endauth

            <li class="divider"></li>
            <li><a href="{{route('admin.bank_transfer_info.deleted')}}">{{ trans('innovate.static_page.deleted_bankinfo') }}</a></li>
          </ul>
        </div>



    </div>

    <div class="clearfix"></div>