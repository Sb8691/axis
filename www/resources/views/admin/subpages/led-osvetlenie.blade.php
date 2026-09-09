@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'LED osvetlenie')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 10])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id' => 20])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 21])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 22])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 23])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 24])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 25])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 26])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 27])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 28])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id' => 52])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id' => 33])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id' => 20])
            @include('admin.modules.display-modules.cta-module', ['id' => 12])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id' => 21])
            @include('admin.modules.display-modules.cta-module', ['id' => 13])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id' => 22])
            @include('admin.modules.display-modules.cta-module', ['id' => 14])
        </div>
        <div class="col-md-3">
            @include('admin.modules.display-modules.photo-module', ['id' => 23])
            @include('admin.modules.display-modules.cta-module', ['id' => 15])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id' => 24])
            @include('admin.modules.display-modules.text-module', ['id' => 34])
            <div class="col-md-6">
                @include('admin.modules.display-modules.cta-module', ['id' => 9])
            </div>
            <div class="col-md-6">
                @include('admin.modules.display-modules.cta-module', ['id' => 10])
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{-- @include('admin.modules.display-modules.text-module', ['id' => 9]) --}}
            @include('admin.modules.display-modules.logo-module', ['id' => 1])
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.photo-module', ['id'=>11])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>29])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.text-module', ['id'=>30])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>12])
            @include('admin.modules.display-modules.cta-module', ['id'=>16])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>13])
            @include('admin.modules.display-modules.cta-module', ['id'=>17])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>14])
            @include('admin.modules.display-modules.cta-module', ['id'=>18])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>15])
            @include('admin.modules.display-modules.cta-module', ['id'=>19])
        </div>
        <div class="col-md-4">
            @include('admin.modules.display-modules.photo-module', ['id'=>16])
            @include('admin.modules.display-modules.cta-module', ['id'=>20])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('admin.modules.display-modules.photo-module', ['id'=>17])
        </div>
        <div class="col-md-6">
            @include('admin.modules.display-modules.text-module', ['id'=>31])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.cta-module', ['id'=>8])
        </div>
    </div> --}}
@endsection
