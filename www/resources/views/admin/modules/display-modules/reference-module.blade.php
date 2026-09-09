<?php
$module = \App\Reference::findOrFail($id);
?>
<a class="module" href="/admin/reference-module/{{$module->id}}/edit" style="position: relative; ">
    <i class="fa fa-address-book" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    @if(!$module['title'] && !$module['name'])
        <span style="font-style: italic;">Referencia</span>
    @endif
    @if($module['title'])
        {{str_limit(strip_tags($module['title']), 45)}}
    @endif
    @if($module['name'])
        <br><small>{{str_limit(strip_tags($module['name']), 35)}}</small>
    @endif
</a>
