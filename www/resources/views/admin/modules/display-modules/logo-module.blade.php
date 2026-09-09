<?php
$module = \App\LogosList::findOrFail($id);
?>
<a class="module" href="/admin/logo-module/{{$module->id}}/edit" style="position: relative; ">
    <i class="fa fa-address-card" aria-hidden="true"></i>
    @if($module['updated_at'])
        <small style="position: absolute; top: 5px; right: 5px; color: darkseagreen;">Upravené: <?php echo str_limit(date_format($module['updated_at'], 'j-n-Y \o H:i'), 35); ?></small>
    @endif
    <div style="height: 4px; display: block;"></div>
    <span style="font-style: italic;">@if(!isset($logo_module_title)) Logá @else {{$logo_module_title}} @endif</span>
</a>
