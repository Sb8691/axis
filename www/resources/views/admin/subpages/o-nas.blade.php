@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'O nás')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 8])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id' => 14])
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 44])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id' => 45])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.cta-module', ['id' => 7])
        </div>
    </div>

    

    {{-- <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 9])
            @include('admin.modules.display-modules.text-module', ['id' => 19])
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>20])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>21])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>22])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>23])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>24])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>25])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>26])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>27])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>28])
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id' => 9])
            @include('admin.modules.display-modules.logo-module', ['id' => 1])
        </div>
    </div> --}}
@endsection
