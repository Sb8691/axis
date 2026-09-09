(function($) {
    $(document).ready(function(){
        // .lacobox-single-triggle // CLASS FOR SINGLE IMAGE TRIGGER
        // .lacobox-item // CLASS TO SETUP NAVIGATION, HAS TO BE ON CHILDREN OF GALLERY PARENT
        // .lacobox-multiple-trigger // CLASS FOR MULTIPLE IMAGE TRIGGER

        // CONSTANTS
        var filterSelector = "data-filter";
        var lacobox_description = null;

        // SINGLE LACOBOX IMAGE TRIGGER
        $('.lacobox-single-trigger').click(function(){
            var path;
            // CHECKS IF CLASS IS PLACED ON ELEMENT OR PARENT
            if($(this).is('img')) {
                path = $(this).attr('src');
                lacobox_description = $(this).attr('lacobox-description');
            } else {
                path = $(this).find("img").first().attr('src');
                lacobox_description = $(this).find("img").first().attr('lacobox-description');
            }
            // SET IMAGE
            $('#lacobox-image').attr('src',path);
            // SHOW LIGHBOX AND HIDE NAVIGATION
            $('#lacobox-container').addClass("hide-navigation").css('display','block');
            if(lacobox_description != null && lacobox_description != "")
                $('.lacobox-description').css('display','block').html(lacobox_description);
        });
        // END SINGLE LACOBOX IMAGE TRIGGER

        // LIMITING VIEWING IMAGES TO SELECTED FILTER
        var filter = null;
        $(".lacobox-filter").click(function(){
            // MAKE LIMITATION APPLY ONLY IF THE FILTER DOES NOT SELECT ALL WITH SYMBOL *
            if($(this).attr(filterSelector) != "*") {
                filter = $(this).attr(filterSelector);
            } else {
                filter = null;
            }
        });
        // END FILTER

        // MULTIPLE LACOBOX IMAGE TRIGGER
        $('.lacobox-multiple-trigger').click(function () {
            var path;
            // CHECKS IF CLASS IS PLACED ON ELEMENT OR PARENT
            if($(this).is('img')) {
                path = $(this).attr('src');
                lacobox_description = $(this).attr('lacobox-description');
            } else {
                path = $(this).find("img").first().attr('src');
                lacobox_description = $(this).find("img").first().attr('lacobox-description');
            }

            $(this).closest(".lacobox-item").addClass('lacobox-current-image');
            // SET IMAGE
            $('#lacobox-image').attr('src', path);
            // SHOW LIGHTBOX
            $('#lacobox-container').css('display', 'block');

            check();

            if(lacobox_description != null && lacobox_description != "")
                $('.lacobox-description').css('display','block').html(lacobox_description);
        });
        // END MULTIPLE LACOBOX IMAGE TRIGGER

        // CLOSE LACOBOX
        $('.close-lacobox, .close-lacobox span, #lacobox-container').click(function (e) {
            e.preventDefault();
            if (e.target !== this)
                return;
            // HIDE LACOBOX
            $('#lacobox-container').css('display', 'none').removeClass("hide-navigation");
            $('.lacobox-current-image').removeClass('lacobox-current-image');
            $('.lacobox-description').css('display','none').html(null);
        });
        // END CLOSE LACOBOX


        // LACOBOX NAVIGATION NEXT IMAGE
        $('.next-lacobox-image').on("click", function () {
            if(!$(this).hasClass("no-next-lacobox-image"))
                nextImage();
        });
        $('#lacobox-container').on("swipeleft", function () {
            if(!$(this).hasClass("no-next-lacobox-image"))
                nextImage();
        });

        function nextImage() {
            var newCurrent;
            if (filter == null){
                newCurrent = $('.lacobox-current-image').next('.lacobox-item').find('img');
            }
            else {
                newCurrent = $('.lacobox-current-image').nextAll(filter).first().find('img');
            }
            lacobox_description = newCurrent.attr('lacobox-description');

            if (newCurrent.length != 0) {
                var nextPath;
                if (filter == null)
                    nextPath = $('.lacobox-current-image').next('.lacobox-item').find('img').attr("src");
                else
                    nextPath = $('.lacobox-current-image').nextAll(filter).first().find('img').attr("src");

                $('#lacobox-image').attr('src', nextPath);
                $('.lacobox-current-image').removeClass('lacobox-current-image');
                newCurrent.closest(".lacobox-item").addClass('lacobox-current-image');

                check();

                if(lacobox_description != null && lacobox_description != "")
                    $('.lacobox-description').css('display','block').html(lacobox_description);
                else
                    $('.lacobox-description').css('display','none');
            }
        }
        // END LACOBOX NAVIGATION NEXT IMAGE

        // LACOBOX NAVIGATION PREVIOUS IMAGE
        $('#lacobox-container').on("swiperight", function () {
            if(!$(this).parent().hasClass("no-next-lacobox-image"))
                previousImage();
        });
        $('.previous-lacobox-image').on("click", function () {
            if(!$(this).parent().hasClass("no-next-lacobox-image"))
                previousImage();
        });

        function previousImage() {
            var newCurrent;
            if (filter == null){
                newCurrent = $('.lacobox-current-image').prev('.lacobox-item').find('img');
            }
            else {
                newCurrent = $('.lacobox-current-image').prevAll(filter).first().find('img');
            }
            lacobox_description = newCurrent.attr('lacobox-description');

            if (newCurrent.length != 0) {
                var nextPath;
                if (filter == null)
                    nextPath = $('.lacobox-current-image').prev('.lacobox-item').find('img').attr("src");
                else
                    nextPath = $('.lacobox-current-image').prevAll(filter).first().find('img').attr("src");

                $('#lacobox-image').attr('src', nextPath);
                $('.lacobox-current-image').removeClass('lacobox-current-image');
                newCurrent.closest(".lacobox-item").addClass('lacobox-current-image');

                check();

                if(lacobox_description != null && lacobox_description != "")
                    $('.lacobox-description').css('display','block').html(lacobox_description);
                else
                    $('.lacobox-description').css('display','none');
            }
        }
        // END LACOBOX NAVIGATION PREVIOUS IMAGE

        function check() {
            // CHECK IF BUTTONS ARE TO BE ENABLED OR DISALED, WHETHER THERE IS A NEXT OR PREVIOUS IMAGE
            if(filter == null) {
                if ($('.lacobox-current-image').next('.lacobox-item').length == 0) {
                    $('.next-lacobox-image').addClass('no-next-lacobox-image');
                } else {
                    $('.next-lacobox-image').removeClass('no-next-lacobox-image');
                }

                if ($('.lacobox-current-image').prev('.lacobox-item').length == 0) {
                    $('.previous-lacobox-image').addClass('no-next-lacobox-image');
                } else {
                    $('.previous-lacobox-image').removeClass('no-next-lacobox-image');
                }
            } else {
                if ($('.lacobox-current-image').nextAll(filter).length == 0) {
                    $('.next-lacobox-image').addClass('no-next-lacobox-image');
                } else {
                    $('.next-lacobox-image').removeClass('no-next-lacobox-image');
                }

                if ($('.lacobox-current-image').prevAll(filter).length == 0) {
                    $('.previous-lacobox-image').addClass('no-next-lacobox-image');
                } else {
                    $('.previous-lacobox-image').removeClass('no-next-lacobox-image');
                }
            }

        }
    });
})(jQuery);