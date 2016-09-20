<div class="pull-right" style="margin-bottom:10px">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('order.menus.button') }} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.order.index')}}">{{ trans('order.menus.header_buttons.order.all') }}</a></li>
            @permission('create-users')
            <li><a id="btn-add" name="btn-add" href="{{route('admin.order.deleted')}}">{{ trans('order.menus.header_buttons.order.deleted_order') }}</a></li>
            @endauth
        </ul>
    </div>



</div>

<div class="clearfix"></div>