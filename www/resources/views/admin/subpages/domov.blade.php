@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Domov')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>1])
            @include('admin.modules.display-modules.text-module', ['id'=>1])
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>2])
            @include('admin.modules.display-modules.cta-module', ['id'=>1])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>3])
            @include('admin.modules.display-modules.cta-module', ['id'=>2])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>4])
            @include('admin.modules.display-modules.cta-module', ['id'=>3])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>2])
            @include('admin.modules.display-modules.text-module', ['id'=>13])
            <div class="col-md-6">
                @include('admin.modules.display-modules.cta-module', ['id'=>4])
            </div>
            <div class="col-md-6">
                @include('admin.modules.display-modules.cta-module', ['id'=>5])
            </div>
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.photo-module', ['id'=>5])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>6])
            @include('admin.modules.display-modules.text-module', ['id'=>3])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.text-module', ['id'=>4])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.text-module', ['id'=>5])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.text-module', ['id'=>6])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.text-module', ['id'=>7])
        </div>
        <div class="clearfix"></div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.text-module', ['id'=>8])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.cta-module', ['id'=>6])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>9])
            @include('admin.modules.display-modules.logo-module', ['id'=>1])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>10])
        </div>
    </div>
@endsection