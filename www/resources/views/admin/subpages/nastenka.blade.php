@extends('admin.layouts.inner_layout')
@section('page_title', 'Nástenka')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/backend/backend_nastenka.css')}}">
@endsection
@section('inner_content')
    <div class="row text-center">
        <h3>Vitajte v administrácii</h3>
        <br>
        <h4>
            Ste prihlásený ako užívateľ:
        </h4>
        <h4><b>{{ Auth::user()->name }}</b></h4>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('/js/backend-jquery-paginate.js')}}"></script>
    <script>

       function paginateProblems(){
            $('#nastenka-problems-table').paginate({
                limit: 7,
                childrenSelector: 'tbody > tr:not(.break):not(.hidden)',
                first: false,
                last: false
            });

           $('.las-module').removeClass('last-module');

           var module_ids = [];
           $('[module-id]').each(function(){
               if(jQuery.inArray($(this).attr('module-id'), module_ids) == "-1")
                   module_ids.push($(this).attr('module-id'));
           });

           $.each(module_ids, function(e, i){
               $('[module-id='+ i +']:last').addClass('last-module');
           });
        }

        paginateProblems();

        $('#nastenka-problems-table-filter').click(function(e){
            if (e.target !== this)
                return;
           $('#nastenka-filters').toggleClass('hidden');
        });

        $('#nastenka-filters i.fa').click(function(){
            $(this).toggleClass('active-filter');
            if($('.active-filter').length > 0) {
                $('#nastenka-problems-table tbody tr').addClass('hidden');
                $('.active-filter').each(function(){
                    var filter = $(this).attr('filter');
                    $('#nastenka-found-problems').find($(filter)).each(function(){
                        $(this).closest('tr').removeClass('hidden').css('display','table-row');
                    });
                });
                $('.page-navigation').detach();
                paginateProblems();
            } else {
                $('#nastenka-problems-table tbody tr').removeClass('hidden');
                $('.page-navigation').detach();
                paginateProblems();
            }

        });
    </script>
@endsection