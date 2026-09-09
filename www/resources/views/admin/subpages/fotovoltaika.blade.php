@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'O nás')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 27])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id' => 46])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 32])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 15])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 16])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 17])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 18])
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 47])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 48])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 28])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.photo-module', ['id' => 29])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 49])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 50])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.photo-module', ['id' => 30])
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id' => 51])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 31])
        </div>
    </div>



@endsection
