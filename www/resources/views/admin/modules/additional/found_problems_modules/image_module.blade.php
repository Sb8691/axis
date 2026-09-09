@foreach(\App\Photo::where('gallery_id', null)->get() as $photo)
    <!-- PHOTO MINIMAL DIMENSIONS NOT SET -->
        @if($photo->minimal_dimensions == null || $photo->minimal_dimensions == '' || $photo->minimal_dimensions == ' ')
            <tr module-id="p{{$photo->id}}" class="warning-color text-center tr-help" title="Kontaktujte administrátora">
                <td><i class="fa fa-question" title="Upozornenie"></i></td>
                <td>Minimálne rozmery fotky nie sú zadané!</td>
                <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
            </tr>
        @endif
    <!-- PHOTO CORRECT MINIMAL DIMENSIONS SET -->
        @if($photo->minimal_dimensions != null && $photo->minimal_dimensions != '' && $photo->minimal_dimensions != ' ')
            <?php
                $input = $photo->minimal_dimensions;
                $input = preg_match('/[^0]([0-9]+)x[^0]([0-9]+)/', $input);
            ?>
            @if($input == 0)
                <tr module-id="p{{$photo->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
                    <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                    <td>Minimálne rozmery fotky sú v nesprávnom formáte</td>
                    <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                </tr>
            @endif
        @endif

    <!-- PHOTO MINIMAL DIMENSIONS NOT SET -->
            @if(file_exists(public_path().'/images/uploaded/'.$photo->path) && $photo->path != '' && $photo->path != null )
                <?php
                    $size = round(filesize(public_path().'/images/uploaded/'.$photo->path) / 1024, 0);
                ?>
                @if($size > 750)
                    <tr module-id="p{{$photo->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/photo-module/{{$photo->id}}/edit', '_blank')">
                        <td><i class="fa fa-question" title="Upozornenie"></i></td>
                        <td>Veľkosť fotky ( {{$size}}kB ) presahuje odporúčanú maximálnu hodnotu ( 750kB )</td>
                        <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                    </tr>
                @endif
            @else
                <tr module-id="p{{$photo->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/photo-module/{{$photo->id}}/edit', '_blank')">
                    <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                    <td>Fotka neexistuje!</td>
                    <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                </tr>
            @endif
    <!-- PHOTO MINIMAL DIMENSIONS MET -->
            @if($photo->minimal_dimensions != null && $photo->minimal_dimensions != '' && $photo->minimal_dimensions != ' ' && file_exists(public_path().'/images/uploaded/'.$photo->path))
                <?php
                    $sz = explode("x", $photo->minimal_dimensions);
                    list($originalWidth, $originalHeight) = getimagesize(public_path().'/images/uploaded/'.$photo->path);
                ?>
                @if($sz[0] > $originalWidth || $sz[1] > $originalHeight)
                    <tr module-id="p{{$photo->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/photo-module/{{$photo->id}}/edit', '_blank')">
                        <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                        <td>Rozmery fotky sú menšie ako minimálne doporučené rozmery</td>
                        <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                    </tr>
                @endif
            @endif
        <!-- LINK -->
            @if(($photo->link  == null || $photo->link == '' || $photo->link == ' ') && $photo->has_link)
                <tr module-id="p{{$photo->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/photo-module/{{$photo->id}}/edit', '_blank')">
                    <td><i class="fa fa-question" title="Upozornenie"></i></td>
                    <td>Cieľová URL adresa fotky je prázdna</td>
                    <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                </tr>
            @endif
            @if(($photo->link  != null && $photo->link != '' && $photo->link != ' ') && !$photo->has_link)
                <tr module-id="p{{$photo->id}}" class="danger-color text-center tr-link" title="Kontaktujte administrátora">
                    <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                    <td>Cieľová URL adresa fotky nie je prázdna, ale je pre administráciu skrytá!</td>
                    <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                </tr>
            @endif

        <!-- DESCRIPTION -->
            @if(($photo->description  == null || $photo->description == '' || $photo->description == ' ') && $photo->has_description)
                <tr module-id="p{{$photo->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/photo-module/{{$photo->id}}/edit', '_blank')">
                    <td><i class="fa fa-question" title="Upozornenie"></i></td>
                    <td>Popis fotky je prázdny.</td>
                    <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                </tr>
            @endif
            @if(($photo->description  != null && $photo->description != '' && $photo->description != ' ') && !$photo->has_description)
                <tr module-id="p{{$photo->id}}" class="danger-color text-center tr-link" title="Kontaktujte administrátora">
                    <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                    <td>Popis fotky nie je prázdny, ale je pre administráciu skrytý!</td>
                    <td><i class="fa fa-image" aria-hidden="true" title="Foto modul"></i></td>
                </tr>
            @endif
@endforeach