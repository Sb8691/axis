<?php
$module = \App\TextModule::findOrFail($id);
?>
<a class="module" href="/admin/text-module/{{$module->id}}/edit" style="position: relative;">
    <i class="fa fa-comment-o" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    {{str_limit(strip_tags($module['title']), 35)}}
    @if($module['content'])
        <br><small>{{str_limit(strip_tags($module['content']), 45)}}</small>
    @endif
</a>
