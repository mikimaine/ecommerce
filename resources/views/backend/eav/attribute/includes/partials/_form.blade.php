<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('eav.create_eav_attribute') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('eav.update_eav_attribute') }} : {!! $tax->name !!}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.eav.attribute.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">

        <div class="form-group">
            {!! Form::label('product_category_id', trans('eav.menus.eav_attribute_category'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <select name="product_category_id" class="form-control">
                    <option value="">Select Attribute Category</option>

                    @foreach ($eavcategorys as $eavcategory)
                        <option value="{!! $eavcategory->id !!}">{!! $eavcategory->attribute_set_name !!}</option>
                    @endforeach
                </select>
            </div>
        </div><!--form control-->



        <div class="form-group">
            {!! Form::label('title', trans('eav.eav_attribute_title'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => trans('eav.eav_attribute_title')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('datatype', trans('eav.eav_attribute_datatype'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <select name="datatype" class="form-control">
                    <option value="">Select Attribute Data type</option>
                    <option value="product_attribute_int">Int</option>
                    <option value="product_attribute_varchar">VarChar</option>
                    <option value="product_attribute_text">Long Text</option>
                </select>
            </div>
        </div><!--form control-->

        <div class="form-group">
            <label class="col-lg-2 control-label">{{ trans('eav.eav_attribute_notnull') }}</label>
            <div class="col-lg-3">
                <input type="checkbox" name="notnull" />
            </div>
        </div><!--form control-->

    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.eav.attribute.index')}}" class="btn btn-danger btn-xs">{{ trans('strings.cancel_button') }}</a>
            </div>

            <div class="pull-right">
                <input type="submit" class="btn btn-success btn-xs" value="{{ $buttonText }}" />
            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div>
</div>    <!--box-->