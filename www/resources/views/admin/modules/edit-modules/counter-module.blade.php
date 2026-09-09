@extends('admin.layouts.inner_layout')
@section('styles')
    <link href="/css/fontawesome-iconpicker.css" rel="stylesheet">
    <style>
        .fa.picker-target { transform: translateY(-50%); top: 50%; position: absolute;}
    </style>
@endsection
@section('content')
    <br>
    <div class="col-lg-8 col-lg-push-2">
        {!! Form::model($counter,['method'=>'PATCH', 'action'=>['CounterController@update', $counter->id], 'files'=>true])!!}
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="target_number">Cieľové číslo</label>
                    {!! Form::number('target_number',null, ['placeholder'=>'... cieľové číslo','class'=>'form-control', 'rows'=>'1']) !!}
                </div>
            </div>
            @if($counter['has_icon'])
                <div class="col-md-6">
                    <div class="row sameHeight">
                        <div class="col-md-9 makeSameHeight">
                            <div class="form-group">
                                <label for="icon">Ikona</label><br>
                                <input name="icon" class="form-control icp icp-auto" data-input-search="true" value="@if($counter->icon != null && $counter->icon != '' && $counter->icon != ' ') {{ $counter->icon }} @else fa-plane @endif" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3 makeSameHeight" id="icon-holder">
                            <p class="lead">
                                <i class="fa @if($counter->icon != null && $counter->icon != '' && $counter->icon != ' ') {{ $counter->icon }} @else fa-plane @endif fa-2x picker-target"></i>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                @if($counter['has_title'])
                    <div class="form-group">
                        <label for="title">Titulka</label>
                        {!! Form::textarea('title',null, ['placeholder'=>'... titulka','class'=>'form-control', 'rows'=>'1']) !!}
                    </div>
                @endif
                @if($counter['has_time'])
                    <div class="form-group">
                        <label for="time">Rýchlosť dosiahnutia cieľového čísla ( ms )</label>
                        {!! Form::number('time',null, ['placeholder'=>'... rýchlosť v ms','class'=>'form-control', 'rows'=>'2']) !!}
                    </div>
                @endif
            </div>
            @if($counter['has_subtitle'])
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subtitle">Popis</label>
                        {!! Form::textarea('subtitle',null, ['placeholder'=>'... popis','class'=>'form-control', 'rows'=>'2']) !!}
                    </div>
                </div>
            @endif
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        {!! Form::close() !!}
    </div>

    @endsection
@section('scripts')
    <script src="/js/fontawesome-iconpicker.js"></script>
    <script src="/js/sameHeight_v1_1.js"></script>
    <script>
        $('#icon-setter').keyup(function(){
            $('#icon-holder').children().detach();
            $('#icon-holder').append('<i class="fa '+ $('#icon-setter').val()  +'"></i>');
        });

        $('.icp-auto').iconpicker();

        $('.icp').on('iconpickerSelected', function(e) {
            $('.lead .picker-target').get(0).className = 'picker-target fa-2x ' +
                    e.iconpickerInstance.options.iconBaseClass + ' ' +
                    e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
        });
    </script>
@endsection