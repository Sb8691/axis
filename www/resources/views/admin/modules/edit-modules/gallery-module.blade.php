@extends('admin.layouts.main_layout')
@section('styles')
    <link rel="stylesheet" href="/css/jquery.custom-scrollbar.css">
    <style>
        .delete_tag {
            color: red; cursor: pointer; position: absolute; right: 15px; top: 50%; transform: translateY(-50%);
        }
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
        @if($errors->has('path'))
            <div class="col-md-12 alert alert-danger text-center">Podporované formáty pre fotografie sú .jpg, .jpeg</div>
        @endif
        {!! Form::model($gallery,['method'=>'PATCH', 'action'=>['GalleryController@update', $gallery->id], 'files'=>true, 'enctype'=>"multipart/form-data"])!!}
            @if($gallery->has_name)
                <br><br>
                <label for="name">Názov galérie</label>
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                <br>
            @endif
            <div style="border: 2px solid #6e91a0; border-radius: 5px; padding: 0px; ">
                <div id="gallery-container" class="row default-skin" style="max-height: 616px; margin: 0;">
                    @if(sizeof($galleryPhotos) <= 0)
                        <div class="alert alert-warning" style="margin: 26px 20px 20px 20px;">
                            V tejto galérii sa nenachádzajú žiadne fotografie
                        </div>
                    @endif
                    @foreach($galleryPhotos as $photo => $i)
                        <?php $current = \App\Photo::findOrFail($photo); ?>
                        <div class="text-center col-md-4" style="margin-bottom: 5px; padding-top: 5px; margin-top: 5px;">
                            <div class="makeSameHeight" style="height: 200px; width: 100%; background-image: url(/images/uploaded/mini/{{$i}}); background-size: cover; background-position: center;">
                            </div>
                            <input placeholder="... bez popisu" type="text" class="form-control" name="description[{{$photo}}]" value="{{$current->description}}">
                            <div id="tags-to-existing-photos">
                                <div class="row" style="margin: 0;">
                                    <select name="existing_filters[{{$photo}}]" class="filters-for-existing-potos col-md-6 form-control filter-select-for-existing-photos">
                                        <option disabled selected value="0">Zvoľte tag</option>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}" @if($current->tag_id == $tag->id) selected @endif>{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                </div><hr style="margin-top: 2px; margin-bottom: 2px;">
                            </div>
                            <p class="chh" style="margin: 6px 0;">Vymazať <input type="checkbox" name="delete[]" value="{{$photo}}" style="margin-top: 2px;"></p>
                        </div>
                    @endforeach
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" style="margin-top: 10px;">
                    <button class="btn btn-default" id="add_photo">Pridať fotku</button>
                    <hr>
                </div>
                <div class="form-group" id="photo_to_upload">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="margin-top: 10px;">
                    <div class="input-group">
                          <span class="input-group-btn">
                            <button class="btn btn-default" id="add_tag">Pridať tag</button>
                          </span>
                            <input type="text" class="form-inline form-control" id="tag_text">
                    </div>
                    <hr>
                </div>
                <input type="hidden" id="gallery_id" name="gallery_id" value="{{$gallery->id}}">
                <div class="form-group row default-skin" id="tag-container" style="max-height: 250px; ">
                    @foreach($tags as $tag)
                        <div class="col-md-6" style="padding: 0;" id="{{$tag->id}}">
                            <input type="text" class="form-control otags" readonly name="otags[]" value="{{$tag->name}}" style="text-align: center;" >
                            <i class="delete_tag fa fa-trash" ></i>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Upraviť</button>
            <a class="btn btn-primary" href="{{Cookie::get('return_page')}}">Späť</a>
        </div>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! Form::close() !!}
    </div>

@endsection
@section('scripts')
    <script>
        function update_tags() {
            var data = [];
            for(var i = 0; i < $('.ntags').length; i++){
                data.push($('.ntags').eq(i).val());
            }
            $('.ntags').removeClass('ntags').addClass('otags');
            var id = $('#gallery_id').val();
            $.ajax({
                url: '/admin/create-tag',
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'data': JSON.stringify(data),
                    'id': JSON.stringify(id)
                },
                success: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        if(!$('select option[value="' + data[i]['id'] + '"]').length > 0){
                            $('.filter-select').append('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');
                            $('.filter-select-for-existing-photos').append('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');
                            $('.tagToAdd').removeClass('tagToAdd').attr('id',data[i]['id'] );
                        }
                    }
                }
            });
        }

        function delete_tag(id) {
            var gallery_id = $('#gallery_id').val();
            $.ajax({
                url: '/admin/delete-tag',
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'id': JSON.stringify(id),
                    'gallery_id': JSON.stringify(gallery_id)
                },
                success: function (data) {
                    $('select option[value="' + id + '"]').detach();
                    $('#'+id).parent().detach();
                }
            });
        }

        function get_all_tags(){
            var gallery_id = $('#gallery_id').val();
            $.ajax({
                url: '/admin/get-all-tags',
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'gallery_id': JSON.stringify(gallery_id)
                },
                success: function (data) {
                    tags_array = data;
                }
            });
        }
    </script>
    <script>
        var tags_array = <?php echo json_encode(\App\Tag::where('gallery_id', $gallery->id)->get()); ?>;
        $('#add_tag').click(function(e){
            e.preventDefault();
            if($('#tag_text').val() == '' || $('#tag_text').val() == ' ') return;
            $('#tag-container .overview').append('<div class="col-md-6 tagToAdd" style="padding: 0;"><input type="text" class="form-control ntags" readonly name="ntags[]" value="'+ $('#tag_text').val() +'" style="text-align: center;" ><i class="delete_tag fa fa-trash" ></i></div>');
            $('#tag_text').val(null);
            update_tags();
            get_all_tags();
            $("#tag-container").customScrollbar('resize', true);
        });
        /*$('.delete_tag').click( function(){
            var id = $(this).parent().attr('id');
            if(confirm('Naozaj chcete odstrániť tag?')){
                delete_tag(id);
            }
        });*/ // WAS COMMENTED OUT ON 22.09.2017
        $('#tag-container').on('click', $('.delete-tag'), function(e){
            if(e.target.id && confirm('Naozaj chcete odstrániť tag?')){
                var id = e.target.id;
                delete_tag(id);
            }
        }); // WAS ADDED ON 22.09.2017
        $('#add_photo').click(function(e){
            e.preventDefault();
            $('#photo_to_upload').append('<div class="col-md-6" style="padding: 0;"><input class="form-control" name="path[]" type="file" accept="image/jpeg,image/jpg" required></div><div class="col-md-6" style="padding: 0;">' +
                    '<select name="filters[]" id="filter-select" class="filters col-md-6 form-control filter-select">' +
                    '<option disabled selected value="0">Zvoľte tag</option>' +
                    '</select><hr style="margin-top: 2px; margin-bottom: 2px;">' +
                    '</div><input placeholder="... popis" class="form-control col-md-6" type="text" name="descriptions[]">');
            /*
            for (var i = 0; i < tags_array.length; i++) {
                $('.filter-select').append('<option value="' + tags_array[i]['id'] + '">' + tags_array[i]['name'] + '</option>');
            }*/ // WAS COMMENTED OUT ON 22.09.2017 BECAUSE OF MULTIPLYING TAGS IN SELECT
            $('.filter-select').each(function(){
                for (var i = 0; i < tags_array.length; i++) {
                    if(($(this).find('[value=' + tags_array[i]['id'] + ']').length) == 0){
                        $(this).append('<option value="' + tags_array[i]['id'] + '">' + tags_array[i]['name'] + '</option>');
                    }
                }
            });// REPAIR FOR BUG FOUND AT 22.09.2017 - MULTIPLYING TAGS IN SELECT
        });

    </script>
    <script src="/js/jquery.custom-scrollbar.js"></script>
    <script>
        $(document).ready(function() {
            $("#tag-container").customScrollbar();
            $('#gallery-container').customScrollbar();
        });
    </script>
@endsection