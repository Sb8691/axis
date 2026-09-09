@foreach(\App\Slide::all() as $slide)
    <!-- TITLE -->
    @if($slide->title == null || $slide->title == '' || $slide->title == ' ')
        <tr module-id="sld{{$slide->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/slide-module/{{$slide->id}}/edit', '_blank')">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Slide nemá titulku!</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slide modul"></i></td>
        </tr>
    @endif
    <!-- SUBTITLE -->
    @if(($slide->subtitle == null || $slide->subtitle == '' || $slide->subtitle == ' ') && $slide->has_subtitle)
        <tr module-id="sld{{$slide->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/slide-module/{{$slide->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Podtitulok slidu je prázdny</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slide modul"></i></td>
        </tr>
    @endif
    @if(($slide->subtitle != null && $slide->subtitle != '' && $slide->subtitle != ' ') && !$slide->has_subtitle)
        <tr module-id="sld{{$slide->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Podtitulok slidu nie je prázdny, ale je pre administráciu skrytý!</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slide modul"></i></td>
        </tr>
    @endif
    <!-- DESCRIPTION -->
    @if(($slide->description == null || $slide->description == '' || $slide->description == ' ') && $slide->has_description)
        <tr module-id="sld{{$slide->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/slide-module/{{$slide->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Popis slidu je prázdny</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slide modul"></i></td>
        </tr>
    @endif
    <!-- BUTTON LINK -->
    @if((($slide->button_link == null || $slide->button_link == '' || $slide->button_link == ' ') && $slide->has_button) ||
    ($slide->button_link_2 == null || $slide->button_link_2 == '' || $slide->button_link_2 == ' ') && $slide->has_button_2)
        <tr module-id="sld{{$slide->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/slide-module/{{$slide->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Cieľová URL adresa tlačítka je prázdna</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slide modul"></i></td>
        </tr>
    @endif
    <!-- BUTTON TEXT -->
    @if((($slide->button_text == null || $slide->button_text == '' || $slide->button_text == ' ') && $slide->has_button) ||
    ($slide->button_text_2 == null || $slide->button_text_2 == '' || $slide->button_text_2 == ' ') && $slide->has_button_2)
        <tr module-id="sld{{$slide->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/slide-module/{{$slide->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Text tlačítka je prázdny</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slide modul"></i></td>
        </tr>
    @endif

@endforeach