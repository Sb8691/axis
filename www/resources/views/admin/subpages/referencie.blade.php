@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Referencie')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.photo-module', ['id'=>25])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('admin.modules.display-modules.cta-module', ['id'=>11])
        </div>
    </div>
@endsection