<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('innovate.static_page.create_bankinfo') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('innovate.static_page.update_bankinfo') }} : {!! $bank->bank_name !!}</h3>
        @endif

        <div class="box-tools pull-right">
            @include('backend.staticPage.bank_transfer.includes.partials.header-buttons')
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="form-group">
            {!! Form::label('bank_name', trans('innovate.labels.bank_name'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('bank_name', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.bank_name')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('bank_account_no', trans('innovate.labels.bank_account_no'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('bank_account_no', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.bank_account_no')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('support_phone', trans('innovate.labels.support_phone'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('support_phone', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.support_phone')]) !!}
            </div>
        </div><!--form control-->

        <div class="form-group">
            {!! Form::label('description', trans('innovate.labels.description'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('innovate.labels.description')]) !!}
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