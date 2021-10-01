$(document).ready(function(){

//Init


    //Slider
    setInterval(nextSlider, 5000);

    //best-selling-list
    $(".best-selling-list.owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverpause: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                nav: false
            },

            200: {
                items: 2,
            },

            450: {
                items: 3,
            },

            600: {
                items: 4,
                nav: false
            },

            1100: {
                items: 6,
                nav: false
            } 
        }
    });

    // Feature-product-list
    $('.feature-product-list.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsive: {
            900: {
                items: 2,
            }, 
            0 : {
                items: 1,
            }
        }
    });


    //Categories
    $('.categories.owl-carousel').owlCarousel({
        margin: 10,
        responsive: {
            900: {
                items: 4,
            },
            500: {
                items: 6,
            },
            0: {
                items: 3,
            }
        }
    });


    




//event
    //Slider
    $('.slider .btn-left').on("click", prevSlider);
    $('.slider .btn-right').on("click", nextSlider);

    //menu-toggle
    $('#menu-toggle').on("click", function(){
        $('nav').slideToggle();
    });

    //feature prodduct
    $('.featured-this-week .btn-left').on('click', function(){
        $('.feature-product-list.owl-carousel').trigger('prev.owl.carousel');
    });
    $('.featured-this-week .btn-right').on('click', function(){
        $('.feature-product-list.owl-carousel').trigger('next.owl.carousel');
    });

    //Window load
    load();

//function
    //Slider
    function prevSlider(){
        if ($('.slide.active').is('.slide:first')){
            $('.slide:last').addClass('active').siblings().removeClass('active');
        } else {
            $('.slide.active').prev().addClass('active').siblings().removeClass('active');
        }
    }

    function nextSlider(){
        if ($('.slide.active').is('.slide:last')){
            $('.slide:first').addClass('active').siblings().removeClass('active');
        } else {
            $('.slide.active').next().addClass('active').siblings().removeClass('active');
        }
        
    }

    function load(){
        //cart
        var subTotal = 0;
        var Total = 0;
        var n = $('.cart tbody tr').length;
        if (n>3){
            for(let i=0;i<n-3;i++){
                subTotal += parseInt($('.cart tbody tr:eq('+ i +') td:eq(3)').text().substring(1));
            }
        }
        var shipping = parseInt($('.cart tbody tr:eq('+ (n-2) +') td:eq(3)').text().substring(1));
        $('.cart tbody tr:eq(' + (n-3) + ') td:eq(3)').text('$' + subTotal +'.00');
        $('.cart tbody tr:eq(' + (n-1) + ') td:eq(3)').text('$' + (subTotal + shipping) +'.00');
    }

});