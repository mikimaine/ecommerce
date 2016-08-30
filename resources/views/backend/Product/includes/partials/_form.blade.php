<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('product.create_product') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('product.update_product') }} : {!! $tax->name !!}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.tax.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="form-group">
            {!! Form::label('product_category_id', trans('eav.menus.eav_attribute_category'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <select id="product_category_id" name="product_category_id" class="form-control select2">
                    <option value="">Select Attribute Category</option>
                    @if($pageName == 'create')
                        @foreach ($eavcategorys as $eavcategory)
                            <option value="{!! $eavcategory->id !!}">{!! $eavcategory->attribute_set_name !!}</option>
                        @endforeach
                    @elseif($pageName == 'update')
                        @foreach ($eavcategorys as $eavcategory)
                            <option value="{!! $eavcategory->id !!}" {!! $attribute->product_attribute_category->id == $eavcategory->id ? 'selected' : '' !!}>{!! $eavcategory->attribute_set_name !!}</option>
                        @endforeach
                    @endif

                </select>
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('product_type', trans('product.product_type'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <select id="product_type" name="product_type" class="form-control select2">
                    <option value="">{!! trans('product.select_product_type') !!}</option>
                    @if($pageName == 'create')
                        <option value="downloadable"> {!! trans('product.product_downloadable') !!}</option>
                        <option value="non-downloadable"> {!! trans('product.product_non_downloadable') !!}</option>
                    @elseif($pageName == 'update')
                        <option value="downloadable" {!! $attribute->datatype == 'product_attribute_int' ? 'selected' : '' !!} >Int</option>
                        <option value="non-downloadable" {!! $attribute->datatype == 'product_attribute_varchar' ? 'selected' : '' !!}>VarChar</option>
                    @endif
                </select>
            </div>
        </div><!--form control-->
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.tax.index')}}" class="btn btn-danger btn-xs">{{ trans('strings.cancel_button') }}</a>
            </div>

            <div class="pull-right">
                <input type="submit" class="btn btn-success btn-xs" value="{{ $buttonText }}" />
            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div>
</div>    <!--box-->