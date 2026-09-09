@foreach(\App\Gallery::all() as $gallery)
    <!-- NAME -->
    @if(($gallery->name == null || $gallery->name == '' || $gallery->name == ' ') && $gallery->has_name)
        <tr module-id="glr{{$gallery->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/gallery-module/{{$gallery->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Galéria nemá názov</td>
            <td><i class="fa fa-book" aria-hidden="true" title="Galéria modul"></i></td>
        </tr>
    @endif
    <!-- NAME -->
    @if(($gallery->name != null && $gallery->name != '' && $gallery->name != ' ') && !$gallery->has_name)
        <tr module-id="glr{{$gallery->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Galéria má názov, ale je pre administráciu skrytý</td>
            <td><i class="fa fa-book" aria-hidden="true" title="Galéria modul"></i></td>
        </tr>
    @endif
        <?php
            $isPhotoWithoutTag = true;
            $isPhotoMissingDescription = true;
        ?>
        @foreach($gallery->photos as $photo)
            <!-- ANY IMAGE HAS NO FILTER -->
            @if(sizeof($gallery->tags) > 0 && ($photo->tag_id != "-1"))
                <?php
                    $isPhotoWithoutTag = false;
                ?>
            @endif
            <!-- ANY IMAGE HAS NO DESCRIPTION -->
            @if(($photo->description != null && $photo->description != '' && $photo->description != ' '))
                <?php
                    $isPhotoMissingDescription = false;
                ?>
            @endif
        @endforeach

        @if($isPhotoWithoutTag && sizeof($gallery->photos) > 0)
            <tr module-id="glr{{$gallery->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/gallery-module/{{$gallery->id}}/edit', '_blank')">
                <td><i class="fa fa-question" title="Upozornenie"></i></td>
                <td>Jedna alebo viac fotiek v galérii nie je zaradená do žiadneho filtru</td>
                <td><i class="fa fa-book" aria-hidden="true" title="Galéria modul"></i></td>
            </tr>
        @endif
        @if($isPhotoMissingDescription && sizeof($gallery->photos) > 0)
            <tr module-id="glr{{$gallery->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/gallery-module/{{$gallery->id}}/edit', '_blank')">
                <td><i class="fa fa-question" title="Upozornenie"></i></td>
                <td>Jedna alebo viac fotiek v galérii nemajú popis</td>
                <td><i class="fa fa-book" aria-hidden="true" title="Galéria modul"></i></td>
            </tr>
        @endif
@endforeach