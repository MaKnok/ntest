$(document).ready(function(){

    //MENU
    $('#open-menu').click(function(){
        $('.menu').addClass('active');
    });
    
    $('#close-menu').click(function(){
        $('.menu').removeClass('active');
    });

    //MOUSE OVER TOP BAR
    /*menu*/
    $('#open-menu').mouseover(function(){
        if($( window ).width() >= 768){
            $('.hamburger').attr('src', './styles/icons/hamburger-hover.svg');
        }
    });

    $('#open-menu').mouseleave(function(){
        if($( window ).width() >= 768){
            $('.hamburger').attr('src', './styles/icons/hamburger.svg');
        }
    });

    /*login*/

    $('#login').mousedown(function(){
        if($( window ).width() >= 768){
            $('.profile').attr('src', './styles/icons/icon_profile_circled.svg');
        }
    });

    $('#login').mouseover(function(){
        if($( window ).width() >= 768){
            $('.profile').attr('src', './styles/icons/icon_profile_circled_hover.svg');
        }
    });

    $('#login').mouseleave(function(){
        if($( window ).width() >= 768){
            $('.profile').attr('src', './styles/icons/icon_profile_circled.svg');
        }
    });

    //SEARCH
    $('#search-btn').mouseover(function(){
        if($( window ).width() >= 768){
            $('.search-icon').attr('src', './styles/icons/icon_search.svg');
        }
    });

    $('#search-btn').mouseleave(function(){
        if($( window ).width() >= 768){
            $('.search-icon').attr('src', './styles/icons/icon_search_white.svg');
        }
    });


    //HERO LINKS - TO BE IMPROVED - FUTURE IDS!
    $('#opt-link-01').mouseover(function(){
        $('.opt-label-01').addClass('focused');
        $('#opt-img-01').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-01').addClass('hovered');
    });
    
    $('#opt-link-01').mouseleave(function(){
        $('.opt-label-01').removeClass('focused');
        $('#opt-img-01').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-01').removeClass('hovered');
    });

    $('#opt-link-02').mouseover(function(){
        $('.opt-label-02').addClass('focused');
        $('#opt-img-02').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-02').addClass('hovered');
    });
    
    $('#opt-link-02').mouseleave(function(){
        $('.opt-label-02').removeClass('focused');
        $('#opt-img-02').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-02').removeClass('hovered');
    });

    $('#opt-link-03').mouseover(function(){
        $('.opt-label-03').addClass('focused');
        $('#opt-img-03').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-03').addClass('hovered');
    });
    
    $('#opt-link-03').mouseleave(function(){
        $('.opt-label-03').removeClass('focused');
        $('#opt-img-03').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-03').removeClass('hovered');
    });

    $('#opt-link-04').mouseover(function(){
        $('.opt-label-04').addClass('focused');
        $('#opt-img-04').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-04').addClass('hovered');
    });
    
    $('#opt-link-04').mouseleave(function(){
        $('.opt-label-04').removeClass('focused');
        $('#opt-img-04').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-04').removeClass('hovered');
    });

    $('#opt-link-05').mouseover(function(){
        $('.opt-label-05').addClass('focused');
        $('#opt-img-05').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-05').addClass('hovered');
    });
    
    $('#opt-link-05').mouseleave(function(){
        $('.opt-label-05').removeClass('focused');
        $('#opt-img-05').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-05').removeClass('hovered');
    });

    $('#opt-link-06').mouseover(function(){
        $('.opt-label-06').addClass('focused');
        $('#opt-img-06').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-06').addClass('hovered');
    });
    
    $('#opt-link-06').mouseleave(function(){
        $('.opt-label-06').removeClass('focused');
        $('#opt-img-06').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-06').removeClass('hovered');
    });

    $('#opt-link-07').mouseover(function(){
        $('.opt-label-07').addClass('focused');
        $('#opt-img-07').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-07').addClass('hovered');
    });
    
    $('#opt-link-07').mouseleave(function(){
        $('.opt-label-07').removeClass('focused');
        $('#opt-img-07').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-07').removeClass('hovered');
    });

    $('#opt-link-08').mouseover(function(){
        $('.opt-label-08').addClass('focused');
        $('#opt-img-08').attr('src', './styles/icons/arrow_hover.svg');
        $('#opt-img-08').addClass('hovered');
    });
    
    $('#opt-link-08').mouseleave(function(){
        $('.opt-label-08').removeClass('focused');
        $('#opt-img-08').attr('src', './styles/icons/arrow.svg');
        $('#opt-img-08').removeClass('hovered');
    });


    //INFO03 TITLE CONTENT
    info03TitleContent();

    $( window ).resize(function() {
        info03TitleContent();
    });

    function info03TitleContent() {
        if($( window ).width() < 768){
            $("#info03-title").text("Arrangement");
        }else{
            $("#info03-title").text("Kommende arrangementer");
        }
    }

});