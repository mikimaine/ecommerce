<div class="pull-right" style="margin-bottom:10px">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('eav.menus.header_buttons.eav_attribute.button') }} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.eav.attribute.index')}}">{{ trans('eav.menus.header_buttons.eav_attribute.all') }}</a></li>
            @permission('create-users')
            <li><a id="btn-add" name="btn-add" href="{{route('admin.eav.attribute.create')}}">{{ trans('eav.menus.header_buttons.eav_attribute.create_tax') }}</a></li>
            @endauth
        </ul>
    </div>



</div>

<div class="clearfix"></div>