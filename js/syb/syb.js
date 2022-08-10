$(document).ready(function(){
    $(".gnb_1da").click(function(e){
        e.preventDefault();
        $(".gnb_1da").removeClass('act');
        $(this).addClass('act');
        $('body, html').animate({
            scrollTop : 
            $($(this).attr('href')).offset().top
        }, 400, function(){

        })

    })
})