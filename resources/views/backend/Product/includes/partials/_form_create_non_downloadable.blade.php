<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('product.create_product') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('product.update_product') }} : {!! $tax->name !!}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.product.includes.partials.header-buttons')
        </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">{!! trans('product.general') !!}</a></li>
                        <li><a href="#tab_2" data-toggle="tab">{!! trans('product.meta') !!}</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Local</a></li>
                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="form-group">
                                {!! Form::label('product_category_id', trans('eav.menus.eav_attribute_category'),
                                ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    <select id="product_category_id" name="product_category_id"
                                            class="form-control select2">
                                        <option value="">Select Attribute Category</option>
                                        @if($pageName == 'create')
                                            @foreach ($eavcategorys as $eavcategory)
                                                <option value="{!! $eavcategory->id !!}" {!! $category== $eavcategory->
                                                    id ? 'selected " ' : '' !!}>{!! $eavcategory->attribute_set_name !!}
                                                </option>
                                            @endforeach
                                        @elseif($pageName == 'update')
                                            @foreach ($eavcategorys as $eavcategory)
                                                <option value="{!! $eavcategory->id !!}" {!! $attribute->
                                                    product_attribute_category->id == $eavcategory->id ? 'selected' : ''
                                                    !!}>{!! $eavcategory->attribute_set_name !!}
                                                </option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('product_category', trans('product.product_category'), ['class' =>
                                'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    <select id="parent_category" name="parent_category" required="required"
                                            class="form-control select2" style="width: 100%;">
                                        <option value="">{!! trans('product.product_category') !!}</option>
                                        @if($pageName == 'create')
                                            @foreach ($categorys as $category)
                                                @foreach ($category->category_description->category_description_translations as $trans)
                                                    <option value="{!! $category->id !!}"> {!! $trans->name !!}</option>
                                                @endforeach
                                            @endforeach
                                        @elseif($pageName == 'update')
                                            @foreach ($categorys as $category_in)
                                                <option value="{!! $category_in->id !!}" {!! $category->id ==
                                                    $category_in->id ? 'selected' : '' !!}>{!!
                                                    $category_in->category_description->name !!}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                                </div>

                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('sku', trans('product.product_sku'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('sku', null, ['class' => 'form-control','required'=>'required',
                                    'placeholder' => trans('product.product_sku')]) !!}
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('tax_id', trans('tax.tax_rate'), ['class' => 'col-lg-2 control-label'])
                                !!}
                                <div class="col-lg-10">
                                    <select id="tac_id" name="tax_id" required="required" class="form-control select2"
                                            style="width: 100%;">
                                        <option value="">{!! trans('tax.tax_rate') !!}</option>
                                        @if($pageName == 'create')
                                            @foreach ($taxs as $tax)
                                                <option value="{!! $tax->id !!}">{!! $tax->name.' ('.$tax->rate.'%)'
                                                    !!}
                                                </option>
                                            @endforeach
                                        @elseif($pageName == 'update')
                                            @foreach ($categorys as $category_in)
                                                <option value="{!! $category_in->id !!}" {!! $category->id ==
                                                    $category_in->id ? 'selected' : '' !!}>{!!
                                                    $category_in->category_description->name !!}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('currency', trans('product.product_currency'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    <select id="currency" name="currency" class="form-control select2"
                                            required="required" style="width: 100%;">
                                        <option value="">{!! trans('product.product_currency') !!}</option>
                                        <option value="ETB">{!! trans('product.product_ethiopia') !!}</option>
                                        <option value="USD">{!! trans('product.product_usa') !!}</option>
                                    </select>
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('price', trans('product.product_price'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('price', null, ['class' => 'form-control','required'=>'required',
                                    'placeholder' => trans('product.product_price')]) !!}
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('previous_price', trans('product.product_previous_price'), ['class' =>
                                'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('previous_price', null, ['class' => 'form-control', 'placeholder' =>
                                    trans('product.product_previous_price')]) !!}
                                </div>
                            </div>
                            <!--form control-->

                            <div class="form-group">
                                {!! Form::label('stock', trans('product.product_quantity'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('stock', null, ['class' => 'form-control','required'=>'required',
                                    'placeholder' => trans('product.product_quantity')]) !!}
                                </div>
                            </div>
                            <!--form control-->

                            <div class="form-group">
                                {!! Form::label('location', trans('product.product_location'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('location', null, ['class' => 'form-control','required'=>'required',
                                    'placeholder' => trans('product.product_location')]) !!}
                                </div>
                            </div>
                            <!--form control-->

                            <div class="form-group">
                                {!! Form::label('image', trans('category.image'), ['class' => 'col-lg-2 control-label'])
                                !!}
                                <div class="col-lg-10">
                                    {!! Form::file('image', null, ['class' => 'form-control','required'=>'required',
                                    'placeholder' => trans('category.image')]) !!}
                                </div>
                            </div>
                            <!--form control-->

                            <div class="form-group">
                                {!! Form::label('status', trans('category.status'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::checkbox('status', null, ['class' => 'form-control', 'placeholder' =>
                                    trans('eav.eav_attribute_category_name')]) !!}
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                {!! Form::label('unlimited', trans('product.product_unlimited'), ['class' => 'col-lg-2
                                control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::checkbox('unlimited', null, ['class' => 'form-control', 'placeholder' =>
                                    trans('product.product_unlimited')]) !!}
                                </div>
                            </div>
                            <!--form control-->
                            <hr/>
                            <h5>Custom Attributes (product specific)</h5>
                            @foreach($attributes->toArray() as $attribute)
                                @if($attribute['datatype'] == 'product_attribute_int')
                                    <div class="form-group">
                                        {!! Form::label('product_type', $attribute['title'], ['class' => 'col-lg-2
                                        control-label']) !!}
                                        <div class="col-lg-10">
                                            @if($attribute['notnull'] )
                                                {!!
                                                Form::number($attribute['title'].'-'.'productAttributeInt'.'-'.$attribute['id'],
                                                null, [ 'class' => 'form-control','required'=>'true','placeholder' =>
                                                trans('product.product').' '.$attribute['title']]) !!}
                                            @else
                                                {!!
                                                Form::number($attribute['title'].'-'.'productAttributeInt'.'-'.$attribute['id'],
                                                null, [ 'class' => 'form-control', 'placeholder' =>
                                                trans('product.product').' '.$attribute['title']]) !!}
                                            @endif
                                        </div>
                                    </div><!--form control-->

                                @endif
                                @if($attribute['datatype'] == 'product_attribute_text')
                                    <div class="form-group">
                                        {!! Form::label('product_type',$attribute['title'], ['class' => 'col-lg-2
                                        control-label ']) !!}
                                        <div class="col-lg-10">
                                            @if($attribute['notnull'] )
                                                {!!
                                                Form::textarea($attribute['title'].'-'.'productAttributeText'.'-'.$attribute['id'],
                                                null, [' class' => 'form-control editor1','required'=>'true','id'
                                                =>'editor1', 'placeholder' => trans('product.product').'
                                                '.$attribute['title']]) !!}
                                            @else
                                                {!!
                                                Form::textarea($attribute['title'].'-'.'productAttributeText'.'-'.$attribute['id'],
                                                null, [' class' => 'form-control editor1','id' =>'editor1',
                                                'placeholder' => trans('product.product').' '.$attribute['title']]) !!}
                                            @endif
                                        </div>
                                    </div><!--form control-->
                                @endif
                                @if($attribute['datatype'] == 'product_attribute_varchar')
                                    <div class="form-group">
                                        {!! Form::label('product_type', $attribute['title'], ['class' => 'col-lg-2
                                        control-label']) !!}
                                        <div class="col-lg-10">
                                            @if($attribute['notnull'] )
                                                {!!
                                                Form::text($attribute['title'].'-'.'productAttributeVarchar'.'-'.$attribute['id'],
                                                null, ['class' => 'form-control','required'=>'true', 'placeholder' =>
                                                trans('product.product').' '.$attribute['title']]) !!}
                                            @else
                                                {!!
                                                Form::text($attribute['title'].'-'.'productAttributeVarchar'.'-'.$attribute['id'],
                                                null, ['class' => 'form-control', 'placeholder' =>
                                                trans('product.product').' '.$attribute['title']]) !!}
                                            @endif
                                        </div>
                                    </div><!--form control-->
                                @endif
                            @endforeach
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">
                            <div class="form-group">
                                {!! Form::label('meta_title', trans('category.category_meta_title'), ['class' =>
                                'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('meta_title', null, ['class' => 'form-control','placeholder' =>
                                    trans('category.category_meta_title')]) !!}
                                </div>
                            </div>
                            <!--form control-->

                            <div class="form-group">
                                {!! Form::label('meta_description', trans('category.category_meta_description'),
                                ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::textarea('meta_description', null, ['class' =>
                                    'form-control','placeholder' => trans('category.category_meta_description')]) !!}
                                </div>
                            </div>
                            <!--form control-->

                            <hr/>


                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">

                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_en" data-toggle="tab">{!! trans('product.en')
                                            !!}</a></li>
                                    <li><a href="#tab_am" data-toggle="tab">{!! trans('product.am') !!}</a></li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_en">
                                        <div class="form-group">
                                            {!! Form::label('name_en', trans('product.name_en'), ['class' => 'col-lg-2
                                            control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('name_en', null, ['class' => 'form-control',
                                                'placeholder' => trans('product.name_en')]) !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                        <div class="form-group">
                                            {!! Form::label('cart_description_en', trans('product.cart_description_en'),
                                            ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::textarea('cart_description_en', null, ['class' =>
                                                'form-control', 'placeholder' => trans('product.cart_description_en')])
                                                !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                        <div class="form-group">
                                            {!! Form::label('short_description_en',
                                            trans('product.short_description_en'), ['class' => 'col-lg-2
                                            control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::textarea('short_description_en', null, ['class' =>
                                                'form-control', 'placeholder' => trans('product.short_description_en')])
                                                !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                        <div class="form-group">
                                            {!! Form::label('long_description_en', trans('product.long_description_en'),
                                            ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::textarea('long_description_en', null, ['class' =>
                                                'form-control','id' =>'editor2', 'placeholder' =>
                                                trans('product.long_description_en')]) !!}
                                            </div>
                                        </div>
                                        <!--form control-->

                                    </div>

                                    <div class="tab-pane " id="tab_am">
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4><i class="icon fa fa-info"></i> Alert!</h4>
                                            {!! trans('product.message') !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('name_am', trans('product.name_am'), ['class' => 'col-lg-2
                                            control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('name_am', null, ['class' => 'form-control',
                                                'placeholder' => trans('product.name_am')]) !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                        <div class="form-group">
                                            {!! Form::label('cart_description_am', trans('product.cart_description_am'),
                                            ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::textarea('cart_description_am', null, ['class' =>
                                                'form-control', 'placeholder' => trans('product.cart_description_am')])
                                                !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                        <div class="form-group">
                                            {!! Form::label('short_description_am',
                                            trans('product.short_description_am'), ['class' => 'col-lg-2
                                            control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::textarea('short_description_am', null, ['class' =>
                                                'form-control', 'placeholder' => trans('product.short_description_am')])
                                                !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                        <div class="form-group">
                                            {!! Form::label('long_description_am', trans('product.long_description_am'),
                                            ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::textarea('long_description_am', null, ['class' =>
                                                'form-control','id' =>'editor3', 'placeholder' =>
                                                trans('product.long_description_am')]) !!}
                                            </div>
                                        </div>
                                        <!--form control-->
                                    </div>
                                </div
                            </div>


                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->


        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->


    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.tax.index')}}"
                   class="btn btn-danger btn-xs">{{ trans('strings.cancel_button') }}</a>
            </div>

            <div class="pull-right">
                <input type="submit" class="btn btn-success btn-xs" value="{{ $buttonText }}"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /.box-body -->
    </div>
</div>    <!--box-->