/* Erro Pesquisa */
document.querySelector('#form-busca').onsubmit = function() {
  if (document.querySelector('#q').value == '') {
      document.querySelector('#form-busca').style.background = '#ff4d4d';
      document.querySelector('#q').style.background = '#ff4d4d';
      return false;
  }
}

/* Banner Rotativo */
var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 1;

function trocaBanner() {
  bannerAtual = (bannerAtual + 1) % 2;
  document.querySelector('.destaque img').src = banners[bannerAtual];
}

/* Play/Pause */
var timer = setInterval(trocaBanner, 4000);
var controle = document.querySelector('.pause');

controle.onclick = function() {
  if (controle.className == 'pause') {
    clearInterval(timer);
    controle.className = 'play';
  } else {
    timer = setInterval(trocaBanner, 4000);
    controle.className = 'pause';
  }

  return false;
}

/* jQuerry | Botão "Mostrar Mais*/
$('.novidades').addClass('painel-compacto');

$('.novidades button').click(function() {
  $('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos').addClass('painel-compacto');

$('.mais-vendidos button').click(function() {
  $('.mais-vendidos').removeClass('painel-compacto');
});

/* jQuerry | Botão "Mostrar Menos
$('.novidades').removeClass('painel-compacto');

$('.novidades button').click(function() {
  $('.novidades').addClass('painel-compacto');
});

$('.mais-vendidos').removeClass('painel-compacto');

$('.mais-vendidos button').click(function() {
  $('.mais-vendidos').addClass('painel-compacto');
});*/