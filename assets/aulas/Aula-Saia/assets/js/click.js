function checkButtons() {
    var imgSrc = document.getElementById('imgR').src;
    var btnVoltar = document.getElementById('btnVoltar');
    var btnProximo = document.getElementById('btnProximo');

    if (imgSrc.includes('cosanimacao1.gif')||imgSrc.includes('pinca.gif')||imgSrc.includes('bainha1.gif')) {
        btnVoltar.style.display = 'none';
        btnProximo.style.display = 'block';
    } else if (imgSrc.includes('cosanimacao2.gif')||imgSrc.includes('pincavolumeok.gif')||imgSrc.includes('bainha2.gif'))  {
        btnVoltar.style.display = 'block';
        btnProximo.style.display = 'none';
    }
}
/*Botoes dica*/
function dicaFecho() {
    document.getElementById("dica").src = "./assets/images/dicas/dicaFecho.png";
}
function dicaComp() {
    document.getElementById("dica").src = "./assets/images/dicas/dicaComprimento.png";
}
function dicaCint() {
    document.getElementById("dica").src = "./assets/images/dicas/dicaCintura.png";
}
function dicaBai() {
    document.getElementById("dica").src = "./assets/images/dicas/dicaBainha.png";
}
/*Volta*/
function volta() {
    window.location.href = './index.html';
}
/*Botoes nav*/
function voltP() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOPinca/pinca.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/pinca.png";
    checkButtons();
}
function proxP() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOPinca/pincavolumeok.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/pinca2.png";
    checkButtons();
}

function voltC() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOCintura/cosanimacao1.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/cintura.png";        
    checkButtons();
}
function proxC() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOCintura/cosanimacao2.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/cintura2.png";
    checkButtons();
}

function voltB() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOBAINHA/bainha1.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/Bainha.png";
    checkButtons();
}
function proxB() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOBAINHA/bainha2.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/Bainha2.png";
    checkButtons();
}

document.addEventListener('DOMContentLoaded', checkButtons);
