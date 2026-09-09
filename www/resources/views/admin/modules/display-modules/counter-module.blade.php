<?php
$module = \App\Counter::findOrFail($id);
?>
<a class="module" href="/admin/counter-module/{{$module->id}}/edit" style="position: relative; ">
    <i class="fa fa-line-chart" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    @if(!$module['title'])
        <span style="font-style: italic;">Počítadlo</span> <small>( {{str_limit(strip_tags($module['target_number']), 35)}} )</small>
    @endif
    @if($module['title'])
        {{str_limit(strip_tags($module['title']), 45)}} <small>( {{str_limit(strip_tags($module['target_number']), 35)}} )</small>
    @endif
</a>
