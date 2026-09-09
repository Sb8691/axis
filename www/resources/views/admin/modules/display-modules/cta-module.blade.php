<?php
$module = \App\CTA::findOrFail($id);
?>
<a class="module" href="/admin/cta-module/{{$module->id}}/edit" style="position: relative; ">
    <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    @if(!$module['title'] && !$module['subtitle'])
        {{str_limit($module['button_text'], 35)}}
    @endif
    @if($module['title'])
        {{str_limit(strip_tags($module['title']), 45)}}
    @endif
    @if($module['subtitle'])
        <br><small>{{str_limit(strip_tags($module['subtitle']), 35)}}</small>
    @endif
</a>
