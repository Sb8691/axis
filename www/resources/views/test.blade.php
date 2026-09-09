@extends('admin.layouts.main_layout');
@section('content')
    <div id="target"></div>
@endsection
@section('scripts')
    <script>
        var targetNumber = 10000;

        function setChangeToElement(number){
            $('#target').html(number.toLocaleString());
        }

        function countUp(target_number, time){
            var currentNumber = 0;
            var multiplier = target_number / (time * 10);
            console.log(multiplier);
            interval = setInterval(function(){
                if(currentNumber < targetNumber){
                    currentNumber+=multiplier;

                    setChangeToElement(currentNumber);
                } else {
                    setChangeToElement(target_number);
                    clearInterval(interval);
                }
            }, 100);

        }

        countUp(targetNumber, 3);


    </script>
@endsection