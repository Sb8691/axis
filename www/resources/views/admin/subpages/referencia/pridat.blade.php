@extends('admin.layouts.inner_layout')
@section('content')
    <br><br>
    <div class="col-lg-8 col-lg-push-2">
        {!! Form::open(['method'=>'POST', 'action'=>'ReferenciaController@store', 'files'=>true])!!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fotografia v galérii (500x300)</label>
                    {!! Form::file('gallery_path', ['class'=>'form-control', 'required', 'accept'=>'image/jpeg,image/jpg,image/png']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fotografia v hlavičke (1170x420)</label>
                    {!! Form::file('header_path', ['class'=>'form-control', 'required', 'accept'=>'image/jpeg,image/jpg,image/png']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Názov</label>
                    {!! Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'...']) !!}
                </div>
                <div class="form-group">
                    <label>Kategória</label>
                    {!! Form::select('category_id', [0=>'Bez kategórie'] + \App\ReferenciaCategory::pluck('name','id')->all(),null, ['class'=>'form-control', 'required']) !!}
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Parametre</label>
                    <div class="input-group">
                        <input type="text" id="param_name" class="form-control" style="width: 50%;">
                        <input type="text" id="param_value" class="form-control" style="width: 50%;">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="button" id="add_param"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <div id="param-list" style="border: 1px dashed #ddd; padding: 5px;">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Obsah</label>
                    {!! Form::textarea('content', null, ['id'=>'content', 'class'=>'form-control', 'required', 'placeholder'=>'...']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Perex</label>
                    {!! Form::textarea('perex', null, ['class'=>'form-control', 'required', 'placeholder'=>'...']) !!}
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Pridať</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
@section('scripts')
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script src="/js/jquery-ui-sortable.min.js"></script>
    <script>
        $('#add_param').click(function () {
            if($('#param_value').val() && $('#param_name').val()) {
                $('#param-list').append(
                    '<div class="row" style="margin: 2px 0;"><div class="col-md-1"><i class="fa fa-sort" style="line-height: 34px;"></i></div>' +
                    '<div class="col-md-5" style="padding: 0;"><input type="text" name="param_name[]" value="'+$('#param_name').val()+'" readonly class="form-control"></div>' +
                    '<div class="col-md-6" style="padding: 0;"><input type="text" name="param_value[]" value="'+$('#param_value').val()+'" readonly class="form-control"></div>' +
                    '</div>'
                );

                $('#param_value').val(null);
                $('#param_name').val(null);
            }
        });

        $('#param-list').sortable({handle:'.fa-sort'});

        $('#param-list').on('dblclick', '> div',  function () {
            $(this).detach();
        });

        $('#param-list').on('focusin', 'input', function () {
            $(this).prop('readonly', false);
        });

        $('#param-list').on('focusout', 'input', function () {
            $(this).prop('readonly', true);
        });
    </script>
@endsection