
    $('.js--section-to-feature').click(function(){
        $('html, body').animate({scrollTop: $('.js--section-feature').offset().top}, 1000);
    });

    $('.js-wp-1').waypoint(function(direction){
        $('.js-wp-1').addClass('animated fadeInDown');
    },{ offset: '60%'
    });

    $('.js-wp-2').waypoint(function(direction){
        $('.js-wp-2').addClass('animated zoomIn');
    },{ offset: '60%'
    });

    $('.js-wp-3').waypoint(function(direction){
        $('.js-wp-3').addClass('animated zoomIn');
    },{ offset: '60%'
    });

    $('.js-wp-4').waypoint(function(direction){
        $('.js-wp-4').addClass('animated zoomIn');
    },{ offset: '60%'
    });

     $('.js-wp-5').waypoint(function(direction){
        $('.js-wp-5').addClass('animated flipInY');
    },{ offset: '60%'
    });

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
