@foreach(\App\Slider::all() as $slider)
    @if(sizeof($slider->slides) == 0)
        <tr module-id="sldr{{$slider->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/slider-module/{{$slider->id}}/edit', '_blank')">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Slider nemá žiadne slidy!</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slider modul"></i></td>
        </tr>
    @elseif(!$slider->slides->first()->is_public)
        <tr module-id="sldr{{$slider->id}}" class="danger-color text-center tr-link" onclick="window.open('/admin/slider-module/{{$slider->id}}/edit', '_blank')">
            <td><i class="fa fa-warning" title="Vysoká závažnosť"></i></td>
            <td>Slider nemá žiadne viditeľné slidy!</td>
            <td><i class="fa fa-film" aria-hidden="true" title="Slider modul"></i></td>
        </tr>
    @endif
@endforeach