@extends('admin.layouts.inner_layout')
@section('styles')
    <style>
        .delete-child { color: red; position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; }
        .delete-child.parent{ top: 17px; right: 25px;}
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
@endsection
@section('content')
    <br><br>
    <div class="col-lg-8 col-lg-push-2">
        {!! Form::model($attributeList,['method'=>'PATCH', 'action'=>['AttributeListController@update', $attributeList->id], 'files'=>true])!!}
            @if(sizeof($attributes) <= 0)
                <div class="alert alert-warning" style="margin: 26px 20px 20px 20px;">
                    Žiadne atribúty neboli nájdené
                </div>
            @endif
            <?php $parents = 0; ?>
        <br>
        <div class="form-group">
            <label for="name">Pridať hlavný atribút</label>

            <div class="input-group">
                {!! Form::text(null,null, ['placeholder'=>'... názov','class'=>'form-control', 'id'=>'parent_attribute']) !!}
                <span class="input-group-btn">
                    <button id="add-attribute" class="btn btn-default" type="button">Pridať atribút</button>
                </span>
            </div>
        </div>
        <div class="row">
            <div id="attribute-holder" class="col-md-12">
                @foreach($attributes as $id => $attribute)
                    @if(!$attribute->is_child)
                        <?php $parents++; ?>
                        <div class="col-md-6" id="parent-{{$parents}}-holder" style="margin-bottom: 15px;">
                            <input class="form-control" value="{{$attribute->name}}" readonly name="parent_attribute[{{$parents}}]">
                            <div class="input-group">
                                <input parent="{{$parents}}" type="text" class="form-control add-child-att" >
                                <span class="input-group-btn">
                                    <button parent="#parent-{{$parents}}-holder" id="add-child-attribute" class="btn btn-default" type="button">Pridať atribút</button>
                                </span></div>
                            <hr style="margin: 3px; border-color: white;">
                            <i class="fa fa-trash delete-child parent"></i>
                            @foreach($attributes as $chid => $chattribute)
                                @if($chattribute->is_child == $attribute->id)
                                    <div class="col-md-6" style="padding:0;">
                                        <input name="child_attribute[{{$parents}}][]" type="text" class="form-control" readonly value="{{$chattribute->name}}">
                                        <i class="fa fa-trash delete-child"></i>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
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
        var attribute_parents = <?php echo json_encode(sizeof($attributes)+1) ?>;
        $('#add-attribute').click(function(){
            var val = $('#parent_attribute').val();
           if( val != null && val != '' && val != ' '){
               attribute_parents++;
               $('#attribute-holder').append('' +
                       '<div class="col-md-6" style="margin-bottom: 15px;" id="parent-'+attribute_parents+'-holder">' +
                       '<input class="form-control" value="'+val+'" readonly name="parent_attribute['+attribute_parents+']">' +
                       '<div class="input-group">' +
                       '<input parent="'+attribute_parents+'" type="text" class="form-control add-child-att" ><span class="input-group-btn"><button parent="#parent-'+attribute_parents+'-holder" id="add-child-attribute" class="btn btn-default" type="button">Pridať atribút</button></span></div>' +
                       '<hr style="margin: 3px; border-color: white;"><i class="fa fa-trash delete-child parent"></i></div>');
               $('#parent_attribute').val('');
           }
        });
        $('#attribute-holder').on('click', '#add-child-attribute',function(){
            var input = $(this).parent().parent().find('.add-child-att');
            var parent = input.attr('parent');
            $('#parent-'+parent+'-holder').append('<div class="col-md-6" style="padding:0;"><input name="child_attribute['+parent+'][]" type="text" class="form-control" readonly value="'+input.val()+'"><i class="fa fa-trash delete-child"></i></div>');
            input.val('');
        });
        $('#attribute-holder').on('click', '.delete-child',function() {
            if(confirm('Naozaj si prajete odstrániť podatribút?')){
                $(this).parent().detach();
            }
        });
    </script>
@endsection