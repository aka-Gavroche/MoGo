$(function(){

    var header = $("#header");
    var introH = $("#intro").innerHeight();
    var scrollOffset = $(window).scrollTop();

//--------------------FIXED HEADER--------------------//
    checkScroll(scrollOffset);

    $(window).on("scroll", function(){
        scrollOffset = $(this).scrollTop();

        checkScroll(scrollOffset);
    });

    function checkScroll(scrollOffset) {

        console.log (scrollOffset);
       if(scrollOffset >= introH) {
            header.addClass("fixed");
       } else {
            header.removeClass("fixed");
       }

    }


//--------------------SMOOTH SCROLL--------------------//
    $("[data-scroll]").on("click",function(event) {
        event.preventDefault(); 

        var $this = $(this);
        var blockId = $this.data('scroll');
        blockOffset = $(blockId).offset().top;

        $("#nav a").removeClass("active"); 
        $this.addClass("active");

        $("html, body").animate ({
            scrollTop: blockOffset
        }, 500)
    });


//--------------------MENU NAV TOGGLE--------------------//
    $("#nav_toggle").on("click", function(event){
        event.preventDefault();

        $("#nav_toggle").toggleClass("active");
        $("#nav").toggleClass("active");

        
    });


//--------------------SLIDER--------------------//
    $("[data-slider]").slick({
        infinite: true,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

});


