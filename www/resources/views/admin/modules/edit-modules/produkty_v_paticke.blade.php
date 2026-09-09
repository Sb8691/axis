@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Produkty v pätičke')
@section('inner_content')
    <?php
        $produkty = \App\Product::all()->pluck('name', 'id');
    ?>
    <div class="row">
        <form action="/admin/produkty-v-paticke/upravit" method="post">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        {{csrf_field()}}
                        {!! Form::select('title[32]', $produkty, \App\TextModule::findOrFail(32)->title, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-3">
                        {{csrf_field()}}
                        {!! Form::select('title[33]', $produkty, \App\TextModule::findOrFail(33)->title, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-3">
                        {{csrf_field()}}
                        {!! Form::select('title[34]', $produkty, \App\TextModule::findOrFail(34)->title, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-3">
                        {{csrf_field()}}
                        {!! Form::select('title[35]', $produkty, \App\TextModule::findOrFail(35)->title, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="row" style="margin-top: 25px;">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary">Aktualizovať</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection