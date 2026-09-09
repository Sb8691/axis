
@if(file_exists(public_path().'/images/uploaded/'.$path ))
    <?php
        list($width, $height, $type, $attr) = getimagesize(public_path().'/images/uploaded/'.$path);
        $orientation = 'width';
        if(isset($orientation)) {
            $orientation = 'height';
        }
    ?>
    @if($width > $rWidth || $height > $rHeight)
        @if(isset($display_error))
            <h4 style="color: #ff7b7b">Je potrebné orezanie fotografie. Neorezanie môže spôsobiť problémy.</h4>
        @endif
        <a href="/admin/cropper/{{$path}}\{{$aspectRatio}}\{{$minCropboxWidth}}\{{$orientation}}" class="{{isset($minimalistic) ? '' : 'btn btn-info'}}" target="_blank" style="margin: 5px 15px; padding: 3px 8px;"><i class="fa fa-crop"></i> Orezať fotografiu</a>
    @endif
@endif