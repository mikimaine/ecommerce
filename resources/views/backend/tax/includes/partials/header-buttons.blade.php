    <div class="pull-right" style="margin-bottom:10px">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              {{ trans('tax.menus.header_buttons.tax.button') }} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.tax.index')}}">{{ trans('tax.menus.header_buttons.tax.all') }}</a></li>

            @permission('create-users')
                <li><a href="{{route('admin.tax.create')}}">{{ trans('tax.menus.header_buttons.tax.create_tax') }}</a></li>
            @endauth

            <li class="divider"></li>
            <li><a href="{{route('admin.access.users.deactivated')}}">{{ trans('menus.deactivated_users') }}</a></li>
            <li><a href="{{route('admin.access.users.banned')}}">{{ trans('menus.banned_users') }}</a></li>
            <li><a href="{{route('admin.access.users.deleted')}}">{{ trans('menus.deleted_users') }}</a></li>
          </ul>
        </div>



    </div>

    <div class="clearfix"></div>