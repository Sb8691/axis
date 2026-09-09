(function($) {
$(window).load(function(){
        sameHeight();
    });
    function sameHeight(){

        $('.sameHeight .makeSameHeight').css('height', 'auto');
        $('.sameHeight').each( function(){
            var height = 0;
            $(this).find('.makeSameHeight').each( function(){
                $this = $(this);
                if($this.innerHeight() > height){
                    height = $this.innerHeight();
                }
            });
            $(this).find('.makeSameHeight').css('height', height);
        });
    }

    $(window).resize( function(){
       sameHeight();
    });
})(jQuery);