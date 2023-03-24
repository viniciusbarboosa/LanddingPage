/*FUNÇOES QUANDO INICIAR O BODY*/ 
$(document).ready(function(){
    $("#chamada1").animate({marginTop: '50px'}, 1000);
    $("#chamada1").animate({marginTop: '-20px'}, 1000);
    $("#chamada1").animate({marginTop: '0px'}, 1000); 
});
/*ESPAÇO PARA VAR*/
var $target = $('.anime'),
 animationClass = 'anime-start';
var $fade = $('.efeitoFade'),
    startFade = 'fade-start';

/*ESPAÇO PARA CRIAR FUNÇÕES*/
function animeScroll(){
    var documentTop = $(document).scrollTop();
    $target.each(function(){
        var itemTop = $(this).offset().top;
        if(documentTop >itemTop-500){
            $(this).addClass(animationClass);
        }else{
            $(this).removeClass(animationClass);
        }
    })
}

animeScroll();

function animeFade(){
    var documentTop = $(document).scrollTop();
    $fade.each(function(){
        var itemTop = $(this).offset().top;
        if(documentTop > itemTop-650){
            $(this).addClass(startFade);
        }else{
            $(this).removeClass(startFade);
        }
    })
}

animeFade();

/*FUNÇOES*/
$(document).scroll(function(){
    animeScroll();
    animeFade();
})