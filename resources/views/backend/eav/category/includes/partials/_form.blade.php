<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('eav.create_eav_category') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('eav.update_eav_category') }} : {!! $category->title !!}</h3>
        @endif


    </div><!-- /.box-header -->

    <div class="box-body">

        <div class="form-group">
            {!! Form::label('attribute_set_name', trans('eav.eav_attribute_category_name'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('attribute_set_name', null, ['class' => 'form-control', 'placeholder' => trans('eav.eav_attribute_category_name')]) !!}
            </div>
        </div><!--form control-->

    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.eav.category.index')}}" class="btn btn-danger btn-xs">{{ trans('strings.cancel_button') }}</a>
            </div>

            <div class="pull-right">
                <input id="btn-save" type="submit" class="btn btn-success btn-xs" value="{{ $buttonText }}" />

            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div>
</div>    <!--box-->