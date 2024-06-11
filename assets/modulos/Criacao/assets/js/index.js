const btnCintura = document.querySelector("#btn1");
const btnFecho = document.querySelector("#btn2");
const btnPinca = document.querySelector("#btn3");
const btnComprimento = document.querySelector("#btn4");
const btnAmplitude = document.querySelector("#btn5");
const btnBainha = document.querySelector("#btn6");
const Pormenor = document.querySelector("#mardadorP");

const imgSaia1 = document.querySelector("#saia1");

btnCintura.addEventListener('click', () => {
    window.location.href = './cintura.html';
});

btnFecho.addEventListener('click', () => {
    window.location.href = './fecho.html';
});

btnPinca.addEventListener('click', () => {
    window.location.href = './pinca.html';
});

btnComprimento.addEventListener('click', () => {
    window.location.href = './comprimento.html';
});

btnAmplitude.addEventListener('click', () => {
    window.location.href = './amplitude.html';
});

btnBainha.addEventListener('click', () => {
    window.location.href = './bainha.html';
});
Pormenor.addEventListener('click', () => {
    window.location.href = './';
});


