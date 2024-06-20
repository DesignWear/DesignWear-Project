document.addEventListener("DOMContentLoaded", function () {
    const btnCintura = document.querySelector("#btn1");
    const btnFecho = document.querySelector("#btn2");
    const btnPinca = document.querySelector("#btn3");
    const btnComprimento = document.querySelector("#btn4");
    const btnAmplitude = document.querySelector("#btn5");
    const btnBainha = document.querySelector("#btn6");
    btnCintura.addEventListener('click', () => {
        window.location.href = './cintura.html';
        console.log("0");
    });

    btnFecho.addEventListener('click', () => {
        window.location.href = './fecho.html';
        console.log("1");
    });

    btnPinca.addEventListener('click', () => {
        window.location.href = './pinca.html';
        console.log("2");
    });

    btnComprimento.addEventListener('click', () => {
        window.location.href = './comprimento.html';
        console.log("3");
    });

    btnAmplitude.addEventListener('click', () => {
        window.location.href = './amplitude.html';        
        console.log("4");
    });

    btnBainha.addEventListener('click', () => {
        window.location.href = './bainha.html';
        console.log("5");

    });
});
