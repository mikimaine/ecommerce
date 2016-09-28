<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('tax.create_tax') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('tax.update_tax') }} : {!! $tax->name !!}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.tax.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="form-group">
            {!! Form::label('name', trans('validation.attributes.name'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('tax.tax_name')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('rate', trans('tax.tax_rate'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('rate', null, ['class' => 'form-control', 'placeholder' => trans('tax.tax_rate')]) !!}
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