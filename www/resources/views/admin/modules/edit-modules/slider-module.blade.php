@extends('admin.layouts.inner_layout')
@section('styles')
    <link rel="stylesheet" href="/css/backend/jquery.custom-scrollbar.css">
    <style>
        .toggle-group{
            border: 1px solid #6e91a0;
            border-radius: 5px;
            padding: 10px;
        }
        .viewport { width: 100%!important; }
        .overview { width: 100%!important; }
        .slide-parent > div { transition: border 0.4s ; border: 1px solid transparent; margin-top: 5px;}
        .slide-parent:hover > div{ border: 1px solid #222d32; border-radius: 3px;}
        .slide-parent .slide-img {
            transition: transform 0.5s;
            -webkit-transition: -webkit-transform 0.5s;
        }
        .slide-parent:hover .slide-img { transform: scale(1.05); -webkit-transform: scale(1.05); }
        .slide-parent.toBeDeleted > div {
            border-color: red;
        }
        .scroll-bar.vertical {
            background-color: white;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
        }
    </style>
@endsection
@section('content')
    <?php
        $md = explode("x", $slider->minimal_dimensions);
    ?>
    <br><br>
    <div class="col-lg-8 col-lg-push-2">

        <br>
        <h3>Zoznam slidov </h3>
        <div class="row">
            <div class="col-md-12">
                <small style="color: #00c0ef;">
                    * Orezaná fotka sa zobrazí až po opätovnom načítaní stránky. <br>
                    {{$slider->minimal_dimensions != null ? 'Minimálna veľkosť fotky pre tento slider '. $slider->minimal_dimensions : '' }}
                </small>
            </div>
        </div>
        @if(sizeof($slider->slides) <= 0)
            <div class="alert alert-warning text-center">
                Tento slider nemá žiadne slidy.
            </div>
        @else
            <div class="row">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <div class="col-md-12" style="border: 2px solid #6e91a0; border-radius: 5px; padding: 0px; ">
                    <div id="gallery-container" class="row default-skin" style="max-height: 512px; margin: 0; ">
                        @foreach($slider->slides as $photo)
                            <div class="slide-parent text-center col-md-6" style="margin-bottom: 5px; padding-top: 5px;">
                                <div style="overflow: hidden; ">
                                    <a href="/admin/slide-module/{{$photo->id}}/edit" style="background-color: transparent; padding: 0!important; overflow: hidden; ">
                                        <div class="makeSameHeight slide-img" style="position: relative; height: 200px; width: 100%; background-image: url(/images/uploaded/{{$photo->path}}?timestamp={{time()}}); background-size: cover; background-position: center;">
                                            <div style="position: absolute; bottom: 10px; left: 10px; background: rgba(238, 237, 239, 0.55); padding: 0px; border-radius: 3px;">
                                                @include('admin.modules.additional.cropper.cropper_form', ['minimalistic'=>true, 'rWidth'=>$md[0],'rHeight'=>$md[1],'path'=>$photo->path, 'aspectRatio'=>($md[0]/$md[1]), 'minCropboxWidth'=>$md[0]])
                                            </div>
                                        </div>
                                    </a>
                                    <div class="input-group">
                                        <a href="/admin/slide-module/{{$photo->id}}/edit" style="background-color: transparent;  padding: 0!important;">
                                            <input type="text" class="form-control text-center" style="cursor: pointer!important;" readonly value="{!! strip_tags($photo->title) !!}">
                                        </a>
                                       <span class="input-group-btn">
                                            <button class="btn btn-danger delete-btn" style="padding-right: 13px;" type="button" onclick="deleteSlide({{$photo->id}}, {{$slider->id}})">Vymazať</button>
                                       </span>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        {!! Form::open(['method'=>'POST', 'action'=>'SlideController@create', 'id'=>'create_new_slide_form', 'files'=>true])!!}
        <h3>Vytvoriť nový slide<small> ( Skrytý slide? <input type="checkbox" name="is_public" value="0"> )</small></h3>
            @include('admin.modules.additional.errors')
            <div class="form-group">
                <label for="path">Fotka <br><small style="color: #ff7b7b;">( podporované formáty .jpg, .jpeg )</small></label>
                {!! Form::file('path', ['class'=>'form-control', "accept"=>"image/jpeg,image/jpg"]) !!}
            </div>
            <div class="form-group">
                <label for="title">Titulka</label>
                {!! Form::textarea('title',null, ['placeholder'=>'... titulka','class'=>'form-control', 'rows'=>'1']) !!}
            </div>
            <div class="row toggle-group">
                <input type="checkbox" class="toggle-has" name="has_subtitle" hide_index="1" value="0"> Vypnúť podtitul
                <div class="form-group" index="1">
                    <label for="subtitle">Podtitul</label>
                    {!! Form::textarea('subtitle',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'1']) !!}
                </div>
            </div>
            <div class="row toggle-group hidden">
                <input type="checkbox" class="toggle-has" name="has_description" hide_index="2" value="0"> Vypnúť popis
                <div class="form-group" index="2">
                    <label for="subtitle">Popis</label>
                    {!! Form::textarea('description',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'2']) !!}
                </div>
            </div>
        <?php
        $arr = ['/'=>'Domov', '/o-spolocnosti'=>'O spoločnosti', '/produkty'=>'Produkty' ,'/kontakt'=>'Kontakt', 'ine'=>'Vlastná adresa'];
        ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="toggle-group">
                        <input type="checkbox" class="toggle-has" name="has_button" hide_index="3" value="0"> Vypnúť prvé tlačítko
                        <div class="form-group" index="3">
                            <label for="button_text">Text prvého tlačítka</label>
                            {!! Form::text('button_text',null, ['placeholder'=>'... text tlačítka','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group" index="3">
                            <label for="button_link">URL adresa</label>
                            <!--{!! Form::text('button_link',null, ['placeholder'=>'... URL adresa','class'=>'form-control']) !!}-->
                            {!! Form::select('button_link', $arr, null, ['class'=>'form-control']) !!}
                            {!! Form::text('button_link_custom', null, ['placeholder'=>'... URL adresa','style'=>'margin-top: 2px;','class'=>'form-control hidden']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="toggle-group">
                        <input type="checkbox" class="toggle-has" name="has_button_2" hide_index="4" value="0"> Vypnúť druhé tlačítko
                        <div class="form-group" index="4">
                            <label for="button_text">Text druhého tlačítka</label>
                            {!! Form::text('button_text_2',null, ['placeholder'=>'... text tlačítka','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group" index="4">
                            <label for="button_link">URL adresa</label>
                            <!--{!! Form::text('button_link_2',null, ['placeholder'=>'... URL adresa','class'=>'form-control']) !!}-->
                            {!! Form::select('button_link_2', $arr, null, ['class'=>'form-control']) !!}
                            {!! Form::text('button_link_2_custom', null, ['placeholder'=>'... URL adresa','style'=>'margin-top: 2px;','class'=>'form-control hidden']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="slider_id" value="{{$slider->id}}">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Vytvoriť slide</button>
                <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
            </div>
        {!! Form::close() !!}
    </div>

@endsection
@section('scripts')
    <script>
        $('[name=button_link_2], [name=button_link]').change(function(){
            if($(this).find(':selected').val() == 'ine') {
                $(this).parent().find('input[type=text]').removeClass('hidden');
            } else {
                $(this).parent().find('input[type=text]').addClass('hidden');
            }
        });

        var slides;
        function refreshSlides(){
            $('#gallery-container').children().detach();
            for (var i = 0; i < slides.length; i++) {
                $('#gallery-container').append('<div class="text-center col-md-6" style="margin-bottom: 5px; padding-top: 5px;">' +
                        '<a href="/admin/slide-module/' + slides[i]['id'] + '/edit" style="background-color: transparent"> ' +
                        ' <div class="makeSameHeight" style="position: relative; height: 200px; width: 100%; background-image: url(/images/uploaded/' + slides[i]['path'] + '); background-size: cover; background-position: center;">' +
                        '</div>' +
                        '<h3 style="color: black;">' + slides[i]['title'] + '</h3>' +
                        '</a>' +
                        '<button class="btn btn-danger" onclick="deleteSlide(' + slides[i]['id'] + ', ' + $('input[name="slider_id"]').val() + ')">Vymazať</button>' +
                        '</div>');
            }
            sameHeight();
        }

        function deleteSlide(id, slider_id) {
            if(confirm('Naozaj chcete odstrániť tento slide?')){
                $.ajax({
                    type: "POST",
                    url: "/admin/delete-slide",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'slide_id': JSON.stringify(id),
                        'slider_id': JSON.stringify(slider_id)
                    },
                    success: function (data) {
                        slides = data;
                        refreshSlides();
                    }
                });
            }
        }
        /*
        $("#create_new_slide_form").submit(function(e) {
            setTimeout( function () {
                var id = <?php echo json_encode($slider->id); ?>;
                var title = $("#create_new_slide_form").find("textarea[name='title']").val();
                var is_public = 1;
                if($("#create_new_slide_form").find("input[name='is_public']").is(':checked')){
                    is_public = 0;
                }
                var path = $("#create_new_slide_form").find("input[name='path']").val();
                console.log(path);
                // SUBTITLE
                var subtitle = null;
                var has_subtitle = 0;
                if(!$("#create_new_slide_form").find("input[name='has_subtitle']").is(':checked')){
                    subtitle = $("#create_new_slide_form").find("textarea[name='subtitle']").val();
                    has_subtitle = 1;
                }
                // END SUBTITLE
                // DESCRIPTION
                var description = null;
                var has_description = 0;
                if(!$("#create_new_slide_form").find("input[name='has_description']").is(':checked')){
                    description = $("#create_new_slide_form").find("textarea[name='description']").val();
                    has_description = 1;
                }
                // END DESCRIPTION
                // BUTTON 1
                var button_text = null;
                var button_link = null;
                var has_button = 0;
                if(!$("#create_new_slide_form").find("input[name='has_button']").is(':checked')){
                    button_text = $("#create_new_slide_form").find("input[name='button_text']").val();
                    button_link = $("#create_new_slide_form").find("input[name='button_link']").val();
                    has_button = 1;
                }
                // END BUTTON 1
                // BUTTON 2
                var button_text_2 = null;
                var button_link_2 = null;
                var has_button_2 = 0;
                if(!$("#create_new_slide_form").find("input[name='has_button_2']").is(':checked')){
                    button_text_2 = $("#create_new_slide_form").find("input[name='button_text_2']").val();
                    button_link_2 = $("#create_new_slide_form").find("input[name='button_link_2']").val();
                    has_button_2 = 1;
                }
                // END BUTTON 2
                $.ajax({
                    type: "POST",
                    url: "/admin/create-new-slide",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'slider_id': JSON.stringify(id),
                        'title': JSON.stringify(title),
                        'subtitle': JSON.stringify(subtitle),
                        'description': JSON.stringify(description),
                        'has_subtitle': JSON.stringify(has_subtitle),
                        'has_description': JSON.stringify(has_description),
                        'has_button': JSON.stringify(has_button),
                        'button_text': JSON.stringify(button_text),
                        'button_link': JSON.stringify(button_link),
                        'has_button_2': JSON.stringify(has_button_2),
                        'button_text_2': JSON.stringify(button_text_2),
                        'button_link_2': JSON.stringify(button_link_2),
                        'is_public': JSON.stringify(is_public),
                        'path': JSON.stringify(path)
                    },
                    success: function(data)
                    {
                        alert(data);
                    }
                });
            }, 500);

            e.preventDefault();
        });*/
    </script>
    <script>
        $('.toggle-has').click(function(){
           var index = $(this).attr('hide_index');
            $('div[index='+index+']').slideToggle(750);
        });
    </script>
    <script src="/js/backend/jquery.custom-scrollbar.js"></script>
    <script>
        $(document).ready(function() {
            //$('#gallery-container').customScrollbar();
            $('.delete-btn').on('mouseenter',function(){
                $(this).closest('.slide-parent').addClass('toBeDeleted');
            });
            $('.delete-btn').on('mouseleave',function(){
                $(this).closest('.slide-parent').removeClass('toBeDeleted');
            });
        });
    </script>
@endsection