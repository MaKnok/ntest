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


    //SEARCH BUTTON
    $('#search-button').mouseover(function(){
        if($( window ).width() >= 768){
            $('.search-icon-path').attr('stroke', '#301B0A');
        }
    });

    $('#search-button').mousedown(function(){
        if($( window ).width() >= 768){
            $('.search-icon-path').attr('stroke', '#FDF9EF');
        }
    });

    $('#search-button').mouseleave(function(){
        if($( window ).width() >= 768){
            $('.search-icon-path').attr('stroke', '#FDF9EF');
        }
    });

    //WOOD ARTICLE
    $('#wood-box').mouseover(function(){
        $('.wood-img').attr('src', './styles/icons/arrow_hover_black.svg');
    });

    $('#wood-box').mouseleave(function(){
        $('.wood-img').attr('src', './styles/icons/arrow.svg');
    });

    //INFO01 ARROWS - TO BE IMPROVED - FUTURE IDS!
    $('#info1-box-01').mouseover(function(){
        if($( window ).width() >= 768){
            $('.info1-img-01').attr('src', './styles/icons/arrow_hover_black.svg');
        }
    });

    $('#info1-box-01').mouseleave(function(){
        if($( window ).width() >= 768){
            $('.info1-img-01').attr('src', './styles/icons/arrow.svg');
        }
    });

    $('#info1-box-02').mouseover(function(){
        if($( window ).width() >= 768){
            $('.info1-img-02').attr('src', './styles/icons/arrow_hover_black.svg');
        }
    });

    $('#info1-box-02').mouseleave(function(){
        if($( window ).width() >= 768){
            $('.info1-img-02').attr('src', './styles/icons/arrow.svg');
        }
    });

    //INFO02 ARROWS - TO BE IMPROVED - FUTURE IDS!
    $('#info2-box-01').mouseover(function(){
        $('.info2-img-01').attr('src', './styles/icons/arrow_hover.svg');
    });

    $('#info2-box-01').mouseleave(function(){
        $('.info2-img-01').attr('src', './styles/icons/arrow.svg');
    });

    $('#info2-box-02').mouseover(function(){
        $('.info2-img-02').attr('src', './styles/icons/arrow_hover.svg');
    });

    $('#info2-box-02').mouseleave(function(){
        $('.info2-img-02').attr('src', './styles/icons/arrow.svg');
    });

    $('#info2-box-03').mouseover(function(){
        $('.info2-img-03').attr('src', './styles/icons/arrow_hover.svg');
    });

    $('#info2-box-03').mouseleave(function(){
        $('.info2-img-03').attr('src', './styles/icons/arrow.svg');
    });

    //INFO03 ARROWS - TO BE IMPROVED - FUTURE IDS!
    $('#info3-box-01').mouseover(function(){
        $('.info3-img-01').attr('src', './styles/icons/arrow_hover_black.svg');
    });

    $('#info3-box-01').mouseleave(function(){
        $('.info3-img-01').attr('src', './styles/icons/arrow.svg');
    });

    $('#info3-box-02').mouseover(function(){
        $('.info3-img-02').attr('src', './styles/icons/arrow_hover_black.svg');
    });

    $('#info3-box-02').mouseleave(function(){
        $('.info3-img-02').attr('src', './styles/icons/arrow.svg');
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