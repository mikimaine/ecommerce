<div class="pull-right" style="margin-bottom:10px">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('product.menus.header_buttons.product.button') }} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('admin.product.index')}}">{{ trans('product.menus.header_buttons.product.all') }}</a></li>

            @permission('create-users')
            <li><a href="{{route('admin.product.create')}}">{{ trans('product.menus.header_buttons.product.create_product') }}</a></li>
            @endauth

        </ul>
    </div>



</div>

<div class="clearfix"></div>