<div class="box box-success">
    <div class="box-header with-border">

        @if($pageName == 'create')
            <h3 class="box-title">{{ trans('category.create_category') }}</h3>
        @elseif($pageName == 'update')
            <h3 class="box-title">{{ trans('category.update_category') }} : {!! $category->title !!}</h3>
        @endif


    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="nav-tabs-custom">


            <ul class="nav nav-tabs">
                <li class="">

                </li>
                <li class="active">
                    <a aria-expanded="true" href="#tab_1" data-toggle="tab">Category Settings</a>
                </li>
                <li class="">
                    <a aria-expanded="false" href="#tab_2" data-toggle="tab">Local</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                        {!! Form::label('meta_title', trans('category.category_meta_title'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('meta_title', null, ['class' => 'form-control','placeholder' => trans('category.category_meta_title')]) !!}
                        </div>
                    </div><!--form control-->

                    <div class="form-group">
                        {!! Form::label('meta_description', trans('category.category_meta_description'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => trans('category.category_meta_description')]) !!}
                        </div>
                    </div><!--form control-->

                    <hr />
                    <div class="form-group">
                        {!! Form::label('image', trans('category.image'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::file('image', null, ['class' => 'form-control', 'placeholder' => trans('category.image')]) !!}
                        </div>
                    </div><!--form control-->
                    <div class="form-group">
                        {!! Form::label('parent_category', trans('category.parent_category'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                <select id="parent_category" name="parent_category" class="form-control select2" style="width: 100%;">
                                    <option value="">{!! trans('category.parent_category') !!}</option>
                                    @if($pageName == 'create')
                                        @foreach ($categorys as $category)
                                            <option value="{!! $category->id !!}">{!! $category->category_description->name !!}</option>
                                        @endforeach
                                    @elseif($pageName == 'update')
                                        @foreach ($categorys as $category_in)
                                            <option value="{!! $category_in->id !!}" {!!  $category->id  == $category_in->id ? 'selected' : '' !!}>{!! $category_in->category_description->name  !!}</option>
                                        @endforeach
                                    @endif

                                </select>

                            </div>


                    </div><!--form control-->
                    <div class="form-group">
                        {!! Form::label('status', trans('category.status'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::checkbox('status', null, ['class' => 'form-control', 'placeholder' => trans('eav.eav_attribute_category_name')]) !!}
                        </div>
                    </div><!--form control-->

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">

                    <div class="form-group">
                        {!! Form::label('name_en', trans('category.name_en'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('name_en', null, ['class' => 'form-control', 'placeholder' => trans('category.name_en')]) !!}
                        </div>
                    </div><!--form control-->
                    <div class="form-group">
                        {!! Form::label('description_en', trans('category.description_en'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('description_en', null, ['class' => 'form-control', 'placeholder' => trans('category.description_en')]) !!}
                        </div>
                    </div><!--form control-->
                    <hr />
                    <div class="form-group">
                        {!! Form::label('name_am', trans('category.name_am'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('name_am', null, ['class' => 'form-control', 'placeholder' => trans('category.name_am')]) !!}
                        </div>
                    </div><!--form control-->
                    <div class="form-group">
                        {!! Form::label('description_am', trans('category.description_am'), ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('description_am', null, ['class' => 'form-control', 'placeholder' => trans('category.description_am')]) !!}
                        </div>
                    </div><!--form control-->

                </div><!-- /.tab-pane -->

            </div>
        </div>





    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.category.index')}}" class="btn btn-danger btn-xs">{{ trans('strings.cancel_button') }}</a>
            </div>

            <div class="pull-right">
                <input id="btn-save" type="submit" class="btn btn-success btn-xs" value="{{ $buttonText }}" />

            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div>
</div>    <!--box-->