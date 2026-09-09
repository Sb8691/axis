@extends('admin.layouts.inner_layout')
@section('content')
    <br><br>
    <div class="col-lg-8 col-lg-push-2">
        {!! Form::model($reference,['method'=>'PATCH', 'action'=>['ReferenceController@update', $reference->id], 'files'=>true])!!}
        <?php
        if($reference['has_location'] && $reference['has_name'] &&  $reference['has_date']) {
            $col = 'col-md-4';
        } else
            $col = 'col-md-6';
        ?>
        <br>
        @if($reference['has_path'])
            <div class="text-center">
                <img src="/images/uploaded/mini/{{$reference->path}}" alt="" style="max-height: 200px; margin: auto;">
            </div>
            <div class="form-group">
                <label for="path">Fotka referencie</label>
                {!! Form::file('path', null, ['placeholder'=>'... titulka','class'=>'form-control']) !!}
            </div>
        @endif
        <div class="form-group">
            <label for="title">Titulka</label>
            {!! Form::textarea('title',null, ['placeholder'=>'... titulka','class'=>'form-control', 'rows'=>'1']) !!}
        </div>
        @if($reference['has_description'])
            <div class="form-group">
                <label for="description">Popis</label>
                {!! Form::textarea('description',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'3']) !!}
            </div>
        @endif
        <div class="row">
            @if($reference['has_name'])
                <div class="form-group {{$col}}">
                    <label for="name">Klient</label>
                    {!! Form::text('name',null, ['placeholder'=>'... klient','class'=>'form-control']) !!}
                </div>
            @endif
            @if($reference['has_location'])
                <div class="form-group {{$col}}">
                    <label for="location">Lokalita</label>
                    {!! Form::text('location',null, ['placeholder'=>'... lokalita','class'=>'form-control']) !!}
                </div>
            @endif
            @if($reference['has_date'])
                <div class="form-group {{$col}}">
                    <label for="date">Dátum</label>
                    {!! Form::date('date',null, ['placeholder'=>'... dátum','class'=>'form-control']) !!}
                </div>
            @endif
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

    @endsection