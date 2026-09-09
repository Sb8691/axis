<?php
$module = \App\Photo::findOrFail($id);
?>
<a class="module" href="/admin/photo-module/{{$module->id}}/edit" style="position: relative; ">
    <i class="fa fa-image" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    @if(!$module['description'])
        <span style="font-style: italic;">Fotka</span>
    @endif
    @if($module['description'])
        {{str_limit(strip_tags($module['description']), 35)}}
    @endif
</a>
