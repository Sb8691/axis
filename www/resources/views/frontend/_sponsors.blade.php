@foreach(\App\LogosList::find(1)->logos->sortBy('sort') as $logo)
    <li class="sponsors_logo">
        <img src="/images/uploaded/{{$logo->path}}" alt="{{$logo->alt}}" title="{{$logo->alt}}">
    </li>
@endforeach