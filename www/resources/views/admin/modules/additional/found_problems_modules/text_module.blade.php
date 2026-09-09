@foreach(\App\TextModule::all() as $textModule)
        <!-- TITLE -->
    @if(($textModule->title == null || $textModule->title == '' || $textModule->title == ' '))
        <tr module-id="t{{$textModule->id}}" class=" danger-color text-center tr-link" onclick="window.open('/admin/text-module/{{$textModule->id}}/edit', '_blank')">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Titulka modulu je prázdna!</td>
            <td><i class="fa fa-comment-o" aria-hidden="true" title="Textový modul"></i></td>
        </tr>
    @endif

            <!-- CONTENT -->
    @if(($textModule->content != null && $textModule->content != '' && $textModule->content != ' ') && !$textModule->has_content)
        <tr module-id="t{{$textModule->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Obsah modulu nie je prázdny, ale je pre administráciu skrytý!</td>
            <td><i class="fa fa-comment-o" aria-hidden="true" title="Textový modul"></i></td>
        </tr>
    @endif
    @if(($textModule->content == null || $textModule->content == '' || $textModule->content == ' ') && $textModule->has_content)
        <tr module-id="t{{$textModule->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/text-module/{{$textModule->id}}/edit', '_blank')">
            <td><i class="fa fa-question" title="Upozornenie"></i></td>
            <td>Obsah modulu je prázdny!</td>
            <td><i class="fa fa-comment-o" aria-hidden="true" title="Textový modul"></i></td>
        </tr>
        @endif

                <!-- CONTENT 2 -->
        @if(($textModule->content_2 != null && $textModule->content_2 != '' && $textModule->content_2 != ' ') && !$textModule->has_content_2)
            <tr module-id="t{{$textModule->id}}" class="danger-color text-center tr-help" title="Kontaktujte administrátora">
                <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
                <td>Obsah modulu nie je prázdny, ale je pre administráciu skrytý!</td>
                <td><i class="fa fa-comment-o" aria-hidden="true" title="Textový modul"></i></td>
            </tr>
        @endif
        @if(($textModule->content_2 == null || $textModule->content_2 == '' || $textModule->content_2 == ' ') && $textModule->has_content_2)
            <tr module-id="t{{$textModule->id}}" class="warning-color text-center tr-link" onclick="window.open('/admin/text-module/{{$textModule->id}}/edit', '_blank')">
                <td><i class="fa fa-question" title="Upozornenie"></i></td>
                <td>Dodatočný obsah modulu je prázdny!</td>
                <td><i class="fa fa-comment-o" aria-hidden="true" title="Textový modul"></i></td>
            </tr>
        @endif

        @endforeach