@extends('admin.layouts.inner_layout')
@section('content')
    <?php
        $arr = ['/'=>'Domov', '/o-spolocnosti'=>'O spoločnosti', '/produkty'=>'Produkty' ,'/kontakt'=>'Kontakt', 'ine'=>'Vlastná adresa'];

        $cls = null;
        $cls_val = null;
        if(array_key_exists($ctaModule->button_link, $arr)) {
            $cls = 'hidden';
        } else {
            $cls_val = $ctaModule->button_link;
        }
    ?>
    <br><br>
    <div class="col-lg-8 col-lg-push-2">
        {!! Form::model($ctaModule,['method'=>'PATCH', 'action'=>['CTAController@update', $ctaModule->id], 'files'=>true])!!}
        <br>
        @if($ctaModule['has_title'])
            <div class="form-group">
                <label for="title">Titulka</label>
                {!! Form::textarea('title',null, ['placeholder'=>'... titulka','class'=>'form-control', 'rows'=>'1']) !!}
            </div>
        @endif
        @if($ctaModule['has_subtitle'])
            <div class="form-group">
                <label for="subtitle">Popis</label>
                {!! Form::textarea('subtitle',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'2']) !!}
            </div>
        @endif
        <div class="form-group">
            <label for="button_text">Text tlačítka</label>
            {!! Form::text('button_text',null, ['placeholder'=>'... text tlačítka','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="button_link">URL adresa</label>
            <!--{!! Form::text('button_link',null, ['placeholder'=>'... URL adresa','class'=>'form-control']) !!}-->
            {!! Form::select('button_link', $arr, $cls_val == null ? null : 'ine', ['class'=>'form-control']) !!}
            {!! Form::text('button_link_custom',$cls_val, ['placeholder'=>'... URL adresa','style'=>'margin-top: 2px;','class'=>'form-control '.$cls]) !!}
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

    @endsection
@section('scripts')
    <script>
        $('[name=button_link]').change(function(){
            if($(this).find(':selected').val() == 'ine') {
                $(this).parent().find('input[type=text]').removeClass('hidden');
            } else {
                $(this).parent().find('input[type=text]').addClass('hidden');
            }
        });
    </script>
@endsection