@extends('admin.layouts.main_layout')
@section('content')
    <div class="container" style="padding-top: 35px; max-width: 100%;">
        <div class="row" style="background-color: white; min-height: 300px;">
            <div class="col-md-12">
                <h3>@yield('page_title')</h3>
                <hr>
            </div>
            <div class="col-md-12">
                @yield('inner_content')
            </div>
        </div>
    </div>
@endsection