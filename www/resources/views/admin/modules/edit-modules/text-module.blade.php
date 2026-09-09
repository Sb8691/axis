@extends('admin.layouts.inner_layout')
@section('content')
    <br><br>
    <?php
    /* PODMIENKY */
    $content_rows = 1;
    $content_2_rows = 2;
    if(in_array($textModule->id, array())){
        $editor1=1;
    }
    if(in_array($textModule->id, array(29,32))){
        $editor2=2;
    }
    if(in_array($textModule->id, array())){
        $editor3=1;
    }

    ?>

    <div class="col-lg-8 col-lg-push-2">
        {!! Form::model($textModule,['method'=>'PATCH', 'action'=>['TextModuleController@update', $textModule->id]])!!}
        <div class="form-group">
            <label for="title">Nadpis</label>
            {{ Form::textarea('title', null, ['class'=>'form-control', 'id'=> isset($editor1) ? 'editor1' : '', 'rows'=>1]) }}
        </div>

        @if($textModule['has_content'])
            <div class="form-group">
                <label for="content">Obsah</label>
                {{ Form::textarea('content', null, ['class'=>'form-control', 'id'=> isset($editor2) ? 'editor2' : '', 'rows'=>3]) }}
            </div>
        @endif

        @if($textModule['has_content_2'])
            <div class="form-group">
                <label for="content">Dodatočný obsah</label>
                {{ Form::textarea('content_2', null, ['class'=>'form-control',  'id'=> isset($editor3) ? 'editor3' : '', 'rows'=>$content_2_rows]) }}
            </div>
        @endif

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

@endsection