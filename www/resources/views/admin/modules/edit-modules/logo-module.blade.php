@extends('admin.layouts.inner_layout')
@section('styles')
    <link rel="stylesheet" href="/css/jquery.custom-scrollbar.css">
    <style>
        .scroll-bar.vertical {
            background-color: white;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
        }
        .viewport { width: 100%!important; }
        .overview { width: 100%!important; }
        .scrollable.default-skin .scroll-bar .thumb { background-color: #222d32;}
    </style>
    @if($logosList->has_links == 0)
        <style>
            .logo-link-input { display: none; }
        </style>
    @endif
@endsection
@section('content')
    <?php
    $md = explode("x", $logosList->minimal_dimensions);
    ?>
    <br><br>
    <div class="col-lg-10 col-lg-push-1">
        {!! Form::model($logosList,['method'=>'PATCH', 'action'=>['LogosListController@update', $logosList->id], 'files'=>true])!!}
        <br>
        <div class="row">
            <div class="col-md-12">
                <small style="color: #00c0ef;">
                    * Orezaná fotka sa zobrazí až po opätovnom načítaní stránky.
                </small>
            </div>
        </div>
        <div class="col-md-9" style="border: 2px solid #6e91a0; border-radius: 5px; padding: 0px; ">
            <div id="gallery-container" class="row default-skin" style="max-height: 616px; overflow-y: auto; margin: 0;">
                @if(sizeof($logos) <= 0)
                    <div class="alert alert-warning" style="margin: 26px 20px 20px 20px;">
                        Žiadne logá neboli priradené tomuto logovému modulu.
                    </div>
                @endif
                @foreach($logos as $logo => $i)
                    <?php $current = \App\Logo::findOrFail($logo); ?>
                    <div class="text-center col-md-4" style="margin-bottom: 5px; padding-top: 5px; margin-top: 5px;">
                        <input type="hidden" name="old_logos[]" value="{{$logo}}">
                        <div class="makeSameHeight" style="position: relative; height: 200px; width: 100%; background-image: url(/images/uploaded/{{$i}}?timestamp={{time()}}); background-size: auto; background-position: center; background-repeat: no-repeat;">
                            <div style="position: absolute; bottom: 10px; left: 10px; background: rgba(238, 237, 239, 0.55); padding: 0px; border-radius: 3px;">
                                @include('admin.modules.additional.cropper.cropper_form', ['minimalistic'=>true, 'rWidth'=>$md[0],'rHeight'=>$md[1],'path'=>$i, 'aspectRatio'=>($md[0]/$md[1]), 'minCropboxWidth'=>$md[0]])
                            </div>
                        </div>
                        <input type="file" name="paths[{{$logo}}]" class="form-control">
                        <!--<input placeholder="... bez linku" type="text" class="form-control" name="links[{{$logo}}]" value="{{$current->link}}">-->
                        <input placeholder="... bez altu" type="text" class="form-control" name="alts[{{$logo}}]" value="{{$current->alt}}">
                        <p class="chh" style="margin: 6px 0;">Vymazať <input type="checkbox" name="delete[]" value="{{$logo}}" style="margin-top: 2px;"></p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3" style="max-height: 616px; overflow-y: auto;">
            <div class="row">
                @foreach($logos as $i => $logo)
                    <div class="col-md-12" logo style="margin-top: 2px; text-align: center">
                        <div style="position: relative; display: inline-block">
                            <input type="hidden" name="sort[]" value="{{$i}}">
                            <img src="/images/uploaded/{{$logo}}" alt="" style="height: 75px;">
                            <div id="nav" style="position: absolute; right: 0; width: 20px; top: 0; height: 100%; background-color: rgba(255,255,255,0.75)">
                                <i class="fa fa-angle-up" style="font-size: 20px; cursor: pointer; position: absolute; top: 10px; left: 50%; transform: translateX(-50%)"></i>
                                <i class="fa fa-angle-down" style="font-size: 20px; cursor: pointer; position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%)"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="path"><small style="color: #ff7b7b;">( {{$logosList->minimal_dimensions != null ? 'minimálna veľkosť fotky pre tento modul '. $logosList->minimal_dimensions : '' }} )</small></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group" style="margin-top: 10px;">
                    <button class="btn btn-default" type="button" id="add_logo">Pridať</button>
                    <hr>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row" id="logo_to_upload">

                </div>
            </div>
        </div>
        <br>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

    @endsection
@section('scripts')
    <script>
        $('#toggle_sort').click(function(){
           $('[sorting_wrapper]').slideToggle(500);
        });
        $('[logo] .fa-angle-up').click(function(){
           $(this).closest('[logo]').insertBefore($(this).closest('[logo]').prev('[logo]'));
        });
        $('[logo] .fa-angle-down').click(function(){
            $(this).closest('[logo]').insertAfter($(this).closest('[logo]').next('[logo]'));
        });
        $('#add_logo').click(function(e){
            e.preventDefault();
            $('#logo_to_upload').append('<div class="logo-holder col-md-4 col-lg-4"><input class="form-control" type="file" name="path[]" required><input class="logo-link-input form-control" type="text" name="link[]" placeholder="... URL adresa"><input type="text" name="alt[]" class="form-control" placeholder="... alt loga"></div>');
        });
    </script>
    <script src="/js/jquery.custom-scrollbar.js"></script>

    <script>
        $(document).ready(function() {
            $('#gallery-container').customScrollbar();
        });
    </script>
@endsection