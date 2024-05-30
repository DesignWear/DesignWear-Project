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
}
function proxP() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOPinca/pincavolumeok.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/pinca2.png";
}

function voltC() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOCintura/cosanimacao1.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/cintura.png";
}
function proxC() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOCintura/cosanimacao2.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/cintura2.png";
}

function voltB() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOBAINHA/bainha1.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/Bainha.png";
}
function proxB() {
    document.getElementById("imgR").src = "./assets/images/material/CONTEUDOBAINHA/bainha2.gif";
    document.getElementById("legenda").src = "./assets/images/legendas/Bainha2.png";
}