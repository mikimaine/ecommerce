<div class="pull-right" style="margin-bottom:10px">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('eav.menus.header_buttons.eav_attribute_category.button') }} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.eav.category.index')}}">{{ trans('eav.menus.header_buttons.eav_attribute_category.all') }}</a></li>
            @permission('create-users')
            <li><a id="btn-add" name="btn-add" href="{{route('admin.eav.category.create')}}">{{ trans('eav.menus.header_buttons.eav_attribute_category.create_tax') }}</a></li>
            @endauth
        </ul>
    </div>



</div>

<div class="clearfix"></div>