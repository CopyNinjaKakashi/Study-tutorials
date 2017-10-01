var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner(){
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 4000);
var controle = document.querySelector('.pause');

controle.onclick = function(){
    if(controle.className == 'pause'){
        clearInterval(timer);
        controle.className = 'play';
    } else{
        timer = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
    }
    return false;
};

/*
 * JQUERY
 * 
 */

$('.novidades').addClass('painel-compacto');
$('.mais-vendidos').addClass('painel-compacto');

$('.novidades button').click(function(){
    $('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos button').click(function(){
    $('.mais-vendidos').removeClass('painel-compacto');
});





/*  MINHA VERSAO
var isPlayed = true;


function play(){
    if(!isPlayed){
        timer = setInterval(trocaBanner, 4000);
        isPlayed = true;
    }
    
    console.log("apertei play");
}

function pause(){
    if(isPlayed){
        clearInterval(timer);
        isPlayed = false;
    }
    console.log("apertei pause");
}
*/