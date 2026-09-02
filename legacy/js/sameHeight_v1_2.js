(function($) {
<!-- sameHeight.js -->
        // sameHeight CLASS IS THE PARENT, BY DEFAULT, YOU CAN ASSIGN IT TO <body>
        // makeSameHeight CLASS DEFINES AFFECTED ELEMENTS
        // sHon* CLASS DEFINES UNDER WHAT RESOLUTIONS THE ELEMENTS ARE AFFECTED - BY DEFAULT, THIS IS SET FOR BOOTSTRAP BREAKPOINTS
        // sHindex DEFINES WHICH ELEMENTS ARE CONNECTED TO WHICH. THIS WAY, YOU CAN BIND TWO ELEMENTS IN DIFFERENT SECTIONS AS LONG AS THEY HAVE THE SAME sameHeight PARENT
        // WHEN USING matchChildren, DONT PUT PADDING INTO THE CHILDREN'S STYLES, INSTEAD USE A CLASS
        // CODED BY LACO, 2k17 FTW

        // find whole word in string
        function wordInString(s, word){
            return new RegExp( '\\b' + word + '\\b', 'i').test(s);
        }

        function resetMatchChildren(){
            // get original padding values
            $('[matchChildren]').children().each(function(e){
                $(this).css({'padding-top':'', 'padding-bottom': ''});
            });
        }

        function matchChildren(condition){
            $('[matchChildren]').each(function(){
                if(wordInString($(this).attr('matchChildren'),condition)){
                    $this = $(this);
                    var numberOfChildren = $(this).children().length;

                    // all children are matched equaly
                    var height = $this.innerHeight();
                    $(this).children().each(function(){
                        // get children total height
                        height = height - $(this).outerHeight(true);
                    });

                    // height to be added per child
                    height = height / numberOfChildren;
                    $(this).children().each(function(){
                        var applyHeight = parseInt(($(this).css('padding-top')).replace('px', '')) +(height/2);
                        $(this).css({'padding-top':(applyHeight), 'padding-bottom':(applyHeight)});
                    });
                }
            });
        }

        function sameHeight(){
            // screen sizes
            sm = 768;
            md = 992;
            lg = 1200;

            $('.sameHeight .makeSameHeight').css('height', 'auto');
            $('.sameHeight').each( function(){
                resetMatchChildren();
                var indexArray = [];
                current = $(this);
                // unset sHindex
                $(this).find('.makeSameHeight:not([sHindex])').each( function(){
                    // collect global sHindex ( -1 ) - for all elements that dont have any asigned
                    $(this).attr('sHindex', '-1')
                });
                // set sHindex
                $(this).find('.makeSameHeight[sHindex]').each( function(){
                    // collect all sHindex'es
                    if($.inArray($(this).attr('sHindex'), indexArray) == -1){
                        indexArray.push($(this).attr('sHindex'));
                    }
                });

                $(indexArray).each( function(index, value){
                    var set = 0;
                    var height = 0;
                    var sHonXS, sHonSM, sHonMD, sHonLG, sHonXLG;
                    // go through all elements
                    $(current).find('.makeSameHeight[sHindex='+value+']').each( function(){
                        if (typeof $(this).attr('sHonXS') !== typeof undefined && $(this).attr('sHonXS') !== false) {
                            sHonXS = true;
                        }
                        if (typeof $(this).attr('sHonSM') !== typeof undefined && $(this).attr('sHonSM') !== false) {
                            sHonSM = true;
                        }
                        if (typeof $(this).attr('sHonMD') !== typeof undefined && $(this).attr('sHonMD') !== false) {
                            sHonMD = true;
                        }
                        if (typeof $(this).attr('sHonLG') !== typeof undefined && $(this).attr('sHonLG') !== false) {
                            sHonLG = true;
                        }
                        $this = $(this);
                        if($this.innerHeight() > height){
                            height = $this.innerHeight();
                        }
                    });
                    // get width
                    var width = window.innerWidth;
                    // deal with responsivity settings
                    if (sHonXS && width < sm) {
                        $(current).find('.makeSameHeight[sHindex='+value+']').css('height', height);
                        matchChildren('xs');
                    }
                    if (sHonSM && width >= sm && width < md) {
                        $(current).find('.makeSameHeight[sHindex='+value+']').css('height', height);
                        matchChildren('sm');
                    }
                    if (sHonMD && width >= md && width < lg) {
                        $(current).find('.makeSameHeight[sHindex='+value+']').css('height', height);
                        matchChildren('md');
                    }
                    if (sHonLG && width >= lg) {
                        $(current).find('.makeSameHeight[sHindex='+value+']').css('height', height);
                        matchChildren('lg');
                    }
                    if(!sHonXS && !sHonSM && !sHonMD && !sHonLG && !sHonXLG){
                        $(current).find('.makeSameHeight[sHindex='+value+']').css('height', height);
                    }
                });
        });

        }

        $(window).resize( function(){
            sameHeight();
        });

        $(window).on('load',function(){
            sameHeight();
        });
})(jQuery);
