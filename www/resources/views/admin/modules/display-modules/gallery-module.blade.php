<?php
$module = \App\Gallery::findOrFail($id);
?>
<a class="module" href="/admin/gallery-module/{{$module->id}}/edit" style="position: relative; ">
    <i class="fa fa-book" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    @if($module['has_name'])
        {{$module['name']}}
    @else
        <span style="font-style: italic;">Fotogaléria</span>
    @endif
</a>
