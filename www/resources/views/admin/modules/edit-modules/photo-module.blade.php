@extends('admin.layouts.inner_layout')
@section('content')
<?php
$rWidth = 0;
$rHeight = 0;

if ($photoModule->minimal_dimensions != null) {
    $md = explode("x", $photoModule->minimal_dimensions);
    $rWidth = $md[0];
    $rHeight = $md[1];
}

if (!empty($photoModule->path) && file_exists(public_path() . '/images/uploaded/' . $photoModule->path)) {
    list($width, $height, $type, $attr) = getimagesize(public_path() . '/images/uploaded/' . $photoModule->path);
}

?>
<br><br>
<div class="col-lg-8 col-lg-push-2">
    @include('admin.modules.additional.errors')
    {!! Form::model($photoModule,['method'=>'PATCH', 'action'=>['PhotoController@update', $photoModule->id],'files'=>true])!!}
    <div class="text-center">
        <img src="/images/uploaded/{{$photoModule->path}}?timestamp={{time()}}" alt="" style="max-height: 200px; max-width: 100%; margin: auto;">
        <br>
        @if($rWidth != 0 && $rHeight != 0 && !empty($photoModule->path))
        @include('admin.modules.additional.cropper.cropper_form', ['display_error'=>true,'rWidth'=>$rWidth,'rHeight'=>$rHeight,'path'=>$photoModule->path, 'aspectRatio'=>($rWidth/$rHeight), 'minCropboxWidth'=>$rWidth])
        @endif
    </div>
    <br>
    @if($photoModule['has_description'])
    <div class="form-group">
        <label for="description">Popis</label>
        {!! Form::text('description',null, ['placeholder'=>'... popis','class'=>'form-control']) !!}
    </div>
    @endif
    @if($photoModule['has_link'])
    <div class="form-group">
        <label for="link">URL adresa</label>
        {!! Form::text('link',null, ['placeholder'=>'... url adresa','class'=>'form-control']) !!}
    </div>
    @endif
    <div class="form-group">
        <label for="path">Súbor <small style="color: #ff7b7b;">( podporované formáty .jpg, .jpeg, {{$photoModule->minimal_dimensions != null ? 'odporúčaná veľkosť fotky pre tento modul '. $photoModule->minimal_dimensions : '' }} )</small></label>
        {!! Form::file('path', ['class'=>'form-control', 'accept'=>'image/jpeg,image/jpg']) !!}
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Upraviť</button>
        <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
    </div>
    {!! Form::close() !!}
</div>

@endsection