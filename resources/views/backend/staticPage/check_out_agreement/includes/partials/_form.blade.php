<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('innovate.static_page.create_check_out_agreement') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('innovate.static_page.update_check_out_agreement') }} : {!! $checkout->bank_name !!}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.staticPage.check_out_agreement.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="form-group">
            {!! Form::label('name', trans('innovate.labels.Agreement_name'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.Agreement_name')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('content', trans('innovate.labels.Agreement_content'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.Agreement_content')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('is_active', trans('innovate.labels.is_active'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('is_active', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.is_active')]) !!}
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