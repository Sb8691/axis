@foreach(\App\CTA::all() as $cta)
        <!-- TITLE -->
@if(($cta->title != null || $cta->title != '' || $cta->title != ' ') && !$cta->has_title)
    <tr module-id="cta{{$cta->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
        <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
        <td>Titulka modulu nie je prázdna, ale je pre administráciu skrytá!</td>
        <td><i class="fa fa-mouse-pointer" aria-hidden="true" title="'Call to action' modul"></i></td>
    </tr>
@endif
@if(($cta->title == null || $cta->title == '' || $cta->title == ' ') && $cta->has_title)
    <tr module-id="cta{{$cta->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/cta-module/{{$cta->id}}/edit', '_blank')">
        <td><i class="fa fa-question" title="Upozornenie"></i></td>
        <td>Titulka modulu je prázdna.</td>
        <td><i class="fa fa-mouse-pointer" aria-hidden="true" title="'Call to action' modul"></i></td>
    </tr>
    @endif
            <!-- SUBTITLE -->
    @if(($cta->subtitle != null && $cta->subtitle != '' && $cta->subtitle != ' ') && !$cta->has_subtitle)
        <tr module-id="cta{{$cta->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Podtitulok modulu nie je prázdny, ale je pre administráciu skrytý!</td>
            <td><i class="fa fa-mouse-pointer" aria-hidden="true" title="'Call to action' modul"></i></td>
        </tr>
    @endif
    @if(($cta->subtitle == null || $cta->subtitle == '' || $cta->subtitle == ' ') && $cta->has_subtitle)
        <tr module-id="cta{{$cta->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/cta-module/{{$cta->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Podtitulok modulu je prázdny!</td>
            <td><i class="fa fa-mouse-pointer" aria-hidden="true" title="'Call to action' modul"></i></td>
        </tr>
        @endif

                <!-- BUTTON LINK -->
        @if(($cta->button_link == null || $cta->button_link == '' || $cta->button_link == ' '))
            <tr module-id="cta{{$cta->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/cta-module/{{$cta->id}}/edit', '_blank')">
                <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                <td>Cieľová URL adresa modulu je prázdna</td>
                <td><i class="fa fa-mouse-pointer" aria-hidden="true" title="'Call to action' modul"></i></td>
            </tr>
            @endif

                    <!-- BUTTON TEXT -->
            @if(($cta->button_link == null || $cta->button_link == '' || $cta->button_link == ' '))
                <tr module-id="cta{{$cta->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/cta-module/{{$cta->id}}/edit', '_blank')">
                    <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                    <td>Tlačítko modulu je prázdne</td>
                    <td><i class="fa fa-mouse-pointer" aria-hidden="true" title="'Call to action' modul"></i></td>
                </tr>
            @endif

            @endforeach