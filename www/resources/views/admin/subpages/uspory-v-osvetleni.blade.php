@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Úspory v osvetlení')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>18])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>32])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.photo-module', ['id'=>19])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>33])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id'=>20])
            @include('admin.modules.display-modules.cta-module', ['id'=>12])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id'=>21])
            @include('admin.modules.display-modules.cta-module', ['id'=>13])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id'=>22])
            @include('admin.modules.display-modules.cta-module', ['id'=>14])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id'=>23])
            @include('admin.modules.display-modules.cta-module', ['id'=>15])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>24])
            @include('admin.modules.display-modules.text-module', ['id'=>34])
            <div class="col-md-6">
                @include('admin.modules.display-modules.cta-module', ['id'=>9])
            </div>
            <div class="col-md-6">
                @include('admin.modules.display-modules.cta-module', ['id'=>10])
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>35])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>36])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>37])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>38])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>39])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
@endsection