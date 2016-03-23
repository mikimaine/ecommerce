    <div class="pull-right" style="margin-bottom:10px">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              {{ trans('innovate.static_page.check_out_agreement') }} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.check_out_agreement.index')}}">{{ trans('innovate.static_page.all_check_out_agreement') }}</a></li>

            @permission('create-users')
                <li><a href="{{route('admin.check_out_agreement.create')}}">{{ trans('innovate.static_page.create_check_out_agreement') }}</a></li>
            @endauth

            <li class="divider"></li>
            <li><a href="{{route('admin.check_out_agreement.deleted')}}">{{ trans('innovate.static_page.deleted_check_out_agreement') }}</a></li>
          </ul>
        </div>



    </div>

    <div class="clearfix"></div>