@extends('admin.layouts.inner_layout')
@section('styles')
    <style>
        .toggle-group{
            border: 1px solid #6e91a0;
            border-radius: 5px;
            padding: 10px;
        }
        .form-group > div { width: 100%!important;}
        #slider_revolution_settings > div { margin-top: 5px; margin-bottom: 5px; }
        .error-check { position: relative; }
        .error-check:after {
            font-family: 'FontAwesome';
            content: '\f12a';
            color: red;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        .error-check input { border-color: red;}
    </style>
@endsection
@section('content')
    <br><br>
    <div class="col-lg-8 col-lg-push-2">
        {!! Form::model($slide,['method'=>'PATCH', 'action'=>['SlideController@update', $slide->id], 'id'=>'create_new_slide_form', 'files'=>true])!!}
        <h3>Upraviť slide<small> ( Skrytý slide? <input type="checkbox" name="is_public" value="0" @if($slide->is_public == 0) checked @endif> )</small></h3>
        @include('admin.modules.additional.errors')
        <div class="form-group text-center">
            <img src="/images/uploaded/{{$slide->path}}?timestamp={{time()}}" alt="" style="margin: auto; max-width: 100%; max-height: 750px;">
        </div>
        <div class="form-group">
            <label for="path">Fotka</label>
            {!! Form::file('path', ['class'=>'form-control', "accept"=>"image/jpeg,image/jpg"]) !!}
        </div>
        <div class="form-group">
            <label for="title">Titulka</label>
            {!! Form::textarea('title',null, ['placeholder'=>'... titulka','class'=>'form-control', 'rows'=>'1']) !!}
        </div>
        <div class="row toggle-group">
            {!!   Form::checkbox('has_subtitle', 0, !($slide->has_subtitle), ['class'=>'toggle-has', 'hide_index'=>'1']) !!} Vypnúť podtitul
            <div class="form-group" index="1" @if(!($slide->has_subtitle)) style="display: none;" @endif>
                <label for="subtitle">Podtitul</label>
                {!! Form::textarea('subtitle',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'1']) !!}
            </div>
        </div>
        <div class="row toggle-group hidden">
            {!!   Form::checkbox('has_description', 0, !($slide->has_description), ['class'=>'toggle-has', 'hide_index'=>'2']) !!} Vypnúť popis
            <div class="form-group" index="2" @if(!($slide->has_description)) style="display: none;" @endif>
                <label for="subtitle">Popis</label>
                {!! Form::textarea('description',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'2']) !!}
            </div>
        </div>
        <?php
            $arr = ['/'=>'Domov', '/o-spolocnosti'=>'O spoločnosti', '/produkty'=>'Produkty' ,'/kontakt'=>'Kontakt', 'ine'=>'Vlastná adresa'];
            $cls = null;
            $cls_val = null;
            if(array_key_exists($slide->button_link, $arr)) {
                $cls = 'hidden';
            } else {
                $cls_val = $slide->button_link;
            }

            $cls2 = '';
            $cls2_val = '';
            if(array_key_exists($slide->button_link_2, $arr)) {
                $cls2 = ' hidden';
            } else {
                $cls2_val = $slide->button_link_2;
            }
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="toggle-group">
                    {!!   Form::checkbox('has_button', 0, !($slide->has_button), ['class'=>'toggle-has', 'hide_index'=>'3']) !!} Vypnúť prvé tlačítko
                    <div class="form-group" index="3" @if(!($slide->has_button)) style="display: none;" @endif>
                        <label for="button_text">Text prvého tlačítka</label>
                        {!! Form::text('button_text',null, ['placeholder'=>'... text tlačítka','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group" index="3" @if(!($slide->has_button)) style="display: none;" @endif>
                        <label for="button_link">URL adresa</label>
                        <!--{!! Form::text('button_link',null, ['placeholder'=>'... URL adresa','class'=>'form-control']) !!}-->
                        {!! Form::select('button_link', $arr, $cls_val == null ? null : 'ine', ['class'=>'form-control']) !!}
                        {!! Form::text('button_link_custom', $cls_val, ['placeholder'=>'... URL adresa','style'=>'margin-top: 2px;','class'=>'form-control '.$cls]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="toggle-group">
                    {!!   Form::checkbox('has_button_2', 0, !($slide->has_button_2), ['class'=>'toggle-has', 'hide_index'=>'4']) !!} Vypnúť druhé tlačítko
                    <div class="form-group" index="4" @if(!($slide->has_button_2)) style="display: none;" @endif>
                        <label for="button_text">Text druhého tlačítka</label>
                        {!! Form::text('button_text_2',null, ['placeholder'=>'... text tlačítka','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group" index="4"  @if(!($slide->has_button_2)) style="display: none;" @endif>
                        <label for="button_link">URL adresa</label>
                        <!--{!! Form::text('button_link_2',null, ['placeholder'=>'... URL adresa','class'=>'form-control']) !!}-->
                        {!! Form::select('button_link_2', $arr, $cls2_val == null ? null : 'ine', ['class'=>'form-control']) !!}
                        {!! Form::text('button_link_2_custom',$cls2_val, ['placeholder'=>'... URL adresa','style'=>'margin-top: 2px;','class'=>'form-control '.$cls2]) !!}
                    </div>
                </div>
            </div>
        </div>
        @if(\App\Slider::findOrFail($slide->slider_id)->first()->is_revolution)
            <br>
            <h4 id="toggle-slider-revolution-settings" style="cursor: pointer;">Slider Revolution nastavenia <i class="fa fa-caret-down"></i> </h4>
            <div id="slider-revolution-settigs-container"  style="display: none;">
                <div class="alert alert-warning text-center">
                    Odporúčané meniť len skúseným užívateľom
                </div>
                <div class="row" id="slider_revolution_settings">
                    <?php
                    $settings = $slide->settings;
                    if($slide->settings->is_visibility_supported){
                        $classes = 'col-md-4 col-lg-4 col-sm-4';
                    } else {
                        $classes = 'col-md-3 col-lg-3 col-sm-6';
                    }
                    ?>
                    <div class="{{$classes}}">
                        <label for="title_y_pos">Y - pozícia titulky</label>
                        <div>
                            {!! Form::text('title_Y_pos', $settings->title_Y_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="{{$classes}}">
                        <label for="title_y_pos">X - pozícia titulky</label>
                        <div>
                            {!! Form::text('title_X_pos',$settings->title_X_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    @if($slide->settings->is_visibility_supported)
                        <div class="{{$classes}}">
                            <label for="title_visibility">Viditeľnosť titulky</label>
                            <div>
                            {!! Form::text('title_visibility',$settings->title_visibility, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                            </div>
                        </div>
                    @endif
                    <div class="{{$classes}}">
                        <label for="subtitle_Y_pos">Y - pozícia podtitulu</label>
                        <div>
                        {!! Form::text('subtitle_Y_pos',$settings->subtitle_Y_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="{{$classes}}">
                        <label for="subtitle_X_pos">X - pozícia podtitulu</label>
                        <div>
                        {!! Form::text('subtitle_X_pos',$settings->subtitle_X_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    @if($slide->settings->is_visibility_supported)
                        <div class="{{$classes}}">
                            <label for="subtitle_visibility">Viditeľnosť podtitulu</label>
                            <div>
                            {!! Form::text('subtitle_visibility',$settings->subtitle_visibility, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                            </div>
                        </div>
                    @endif
                    <div class="{{$classes}}">
                        <label for="description_Y_pos">Y - pozícia popisu</label>
                        <div>
                        {!! Form::text('description_Y_pos',$settings->description_Y_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="{{$classes}}">
                        <label for="description_X_pos">X - pozícia popisu</label>
                        <div>
                        {!! Form::text('description_X_pos',$settings->description_X_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    @if($slide->settings->is_visibility_supported)
                        <div class="{{$classes}}">
                            <label for="description_visibility">Viditeľnosť popisu</label>
                            <div>
                            {!! Form::text('description_visibility',$settings->description_visibility, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                            </div>
                        </div>
                    @endif
                    <div class="{{$classes}}">
                        <label for="button_Y_pos">Y - pozícia prvého tlačítka</label>
                        <div>
                        {!! Form::text('button_Y_pos',$settings->button_Y_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="{{$classes}}">
                        <label for="button_X_pos">X - pozícia prvého tlačítka</label>
                        <div>
                        {!! Form::text('button_X_pos',$settings->button_X_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    @if($slide->settings->is_visibility_supported)
                        <div class="{{$classes}}">
                            <label for="button_visibility">Viditeľnosť prvého tlačítka</label>
                            <div>
                            {!! Form::text('button_visibility',$settings->button_visibility, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                            </div>
                        </div>
                    @endif
                    <div class="{{$classes}}">
                        <label for="button_2_Y_pos">Y - pozícia druhého tlačítka</label>
                        <div>
                        {!! Form::text('button_2_Y_pos',$settings->button_2_Y_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="{{$classes}}">
                        <label for="button_2_X_pos">X - pozícia druhého tlačítka</label>
                        <div>
                        {!! Form::text('button_2_X_pos',$settings->button_2_X_pos, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                        </div>
                    </div>
                    @if($slide->settings->is_visibility_supported)
                        <div class="{{$classes}}">
                            <label for="button_2_visibility">Viditeľnosť druhého tlačítka</label>
                            <div>
                            {!! Form::text('button_2_visibility',$settings->button_2_visibility, ['placeholder'=>"['~','~','~','~']",'class'=>'form-control']) !!}
                            </div>
                        </div>
                    @endif
                </div><br>
            </div>
        @endif
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť slide</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
@section('scripts')
    <script>
        $('.toggle-has').click(function(){
            var index = $(this).attr('hide_index');
            $('div[index='+index+']').slideToggle(750);
        });
        $('#toggle-slider-revolution-settings').click(function(){
            $('#slider-revolution-settigs-container').slideToggle(750);
            if($(this).find('i.fa').hasClass('fa-caret-down'))
                $(this).find('.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-up');
            else
                $(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
        });
    </script>
    <script>
        $('#slider_revolution_settings input').on('change', function(){
            if($(this).val().replace(/\d+/g, '') != "['','','','']" && $(this).val().replace(/\d+/g, '') != "")
                $(this).parent().addClass('error-check');
            else
                $(this).parent().removeClass('error-check');
        });
        $('#slider_revolution_settings input').each(function(){
            if($(this).val().replace(/\d+/g, '') != "['','','','']" && $(this).val().replace(/\d+/g, '') != "")
                $(this).parent().addClass('error-check');
            else
                $(this).parent().removeClass('error-check');
        });
        $('[name=button_link_2], [name=button_link]').change(function(){
           if($(this).find(':selected').val() == 'ine') {
               $(this).parent().find('input[type=text]').removeClass('hidden');
           } else {
               $(this).parent().find('input[type=text]').addClass('hidden');
           }
        });
    </script>
@endsection