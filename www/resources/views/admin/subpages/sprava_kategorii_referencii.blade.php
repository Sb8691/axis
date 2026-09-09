@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Správa kategórií produktov')
@section('inner_content')
    <div class="row">
        <div class="col-md-3">
            <h3>Vytvoriť novú kategóriu</h3>
            {!! Form::open(['method'=>'POST', 'action'=>'ReferenciaCategoryController@store'])!!}
                <div class="form-group">
                    {!! Form::text('name', null, ['class'=>'form-control', 'required'=>true, 'placeholder'=>'Názov kategórie']) !!}
                </div>
            <div class="form-group">
                <button class="btn btn-primary">Pridať kategóriu</button>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-3">
            <h3>Upraviť kategóriu</h3>
            <select edit_category_select class="form-control" style="margin-bottom: 15px;">
                <option selected disabled>Vyberte kategóriu</option>
                @foreach(\App\ReferenciaCategory::all()->sortBy('sort') as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @foreach(\App\ReferenciaCategory::all() as $category)
                {!! Form::model($category, ['class'=>'hidden', 'edit_category_form'=>$category->id, 'method'=>'PATCH', 'action'=>['ReferenciaCategoryController@update', $category->id]])!!}
                    <div class="form-group">
                        <label for="name">Nový názov kategórie</label>
                        {!! Form::text('name', null, ['class'=>'form-control', 'required'=>true, 'placeholder'=>'Názov kategórie']) !!}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Upraviť kategóriu</button>
                    </div>
                {!! Form::close() !!}
            @endforeach
        </div>
        <div class="col-md-3">
            <h3>Odstrániť kategóriu</h3>
            <select delete_category_select class="form-control" style="margin-bottom: 15px;">
                <option selected disabled>Vyberte kategóriu</option>
                @foreach(\App\ReferenciaCategory::all()->sortBy('sort') as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @foreach(\App\ReferenciaCategory::all() as $category)
                {!! Form::model($category, ['delete_category_form'=>$category->id, 'method'=>'DELETE', 'action'=>['ReferenciaCategoryController@destroy', $category->id], 'class'=>'hidden'])!!}
                    <div class="form-group">
                        <button class="btn btn-danger">Odstrániť kategóriu</button>
                    </div>
                {!! Form::close() !!}
            @endforeach
        </div>
        <div class="col-md-3">
            <h3>Zoradiť kategórie</h3>
            {!! Form::open(['method'=>'POST', 'action'=>'ReferenciaCategoryController@sort'])!!}
                <div id="order" style="padding: 10px; border: 1px dashed #eee;">
                    @foreach(\App\ReferenciaCategory::all()->sortBy('sort') as $category)
                        <div style="margin: 1px; border: 1px solid #eee; padding: 4px 12px; text-align: center">
                            <input type="hidden" name="sort[]" value="{{$category->id}}">
                            {{$category->name}}
                        </div>
                    @endforeach
                </div>
                @if(\App\ReferenciaCategory::all()->count() > 0)
                    <div class="form-group">
                        <br>
                        <button class="btn btn-info">Zoradiť kategórie</button>
                    </div>
                @endif
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('[select_group]').change(function(){
            var select = $(this);
            select.find('option').each(function(){
                $('[select_group_target="'+$(this).val()+'"]').slideUp(250);
            });
            $('[select_group_target="'+$(this).val()+'"]').slideDown(300);
        });

        $('[edit_category_select]').change(function(){
            $('[edit_category_form]').addClass('hidden');
            $('[edit_category_form="'+$(this).val()+'"]').removeClass('hidden');
        });

        $('[delete_category_select]').change(function(){
            $('[delete_category_form]').addClass('hidden');
            $('[delete_category_form="'+$(this).val()+'"]').removeClass('hidden');
        });
    </script>
    <script src="/js/jquery-ui-sortable.min.js"></script>
    <script>
        $('#order').sortable();
    </script>
@endsection