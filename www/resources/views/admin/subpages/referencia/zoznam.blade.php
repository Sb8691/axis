@extends('admin.layouts.inner_layout')
@include('admin.modules.additional.cookies')
@section('page_title', 'Domov')
@section('inner_content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['method' => 'POST', 'action'=>'ReferenciaController@sort']) !!}
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Názov</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Referencia::all()->sortBy('sort') as $i => $referencia)
                        <tr>
                            <input type="hidden" name="sort[]" value="{{$referencia->id}}">
                            <td><i class="fa fa-sort"></i></td>
                            <td>{{$referencia->id}}</td>
                            <td><a href="/admin/reference-module/{{$referencia->id}}/edit">{{$referencia->name}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            <div class="text-center"><br>
                <button class="btn btn-default">Zmeniť poradie</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/jquery-ui-sortable.min.js"></script>
    <script>
        $('table tbody').sortable({handle: '.fa-sort'});
    </script>
@endsection