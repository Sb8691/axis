@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Kontakt')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>26])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>40])
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>41])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>42])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>43])
        </div>
    </div>
@endsection