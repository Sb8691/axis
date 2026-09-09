@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Pätička')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>7])
            @include('admin.modules.display-modules.text-module', ['id'=>11])
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            @include('admin.modules.display-modules.text-module', ['id'=>12])
        </div>
    </div>
@endsection