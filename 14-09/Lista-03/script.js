var json = document.getElementById('datajson');
var phpData = json.getAttribute('data-php');

var ano = parseInt(phpData[0]);
var mes = parseInt(phpData[1]);
var dia = parseInt(phpData[2]);

const dataFinal = new Date(ano, mes - 1, dia, 23, 0, 0);


function atualizaContagem() {
    const dataAtual = new Date();
    const tempoRestante = dataFinal - dataAtual;

    if (tempoRestante <= 0) {

        document.getElementById('contador').innerHTML = 'A promoção expirou!';
    } else {

        const dias = Math.floor(tempoRestante / (1000 * 60 * 60 * 24));
        const horas = Math.floor((tempoRestante % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((tempoRestante % (1000 * 60 * 60)) / (1000 * 60));
        const segundos = Math.floor((tempoRestante % (1000 * 60)) / 1000);


        document.getElementById('dias').innerHTML = `Dias: ${dias}`;
        document.getElementById('horas').innerHTML = `Horas: ${horas}`;
        document.getElementById('minutos').innerHTML = `Minutos: ${minutos}`;
        document.getElementById('segundos').innerHTML = `Segundos: ${segundos}`;
    }
}

setInterval(atualizaContagem, 1000);

atualizaContagem();
