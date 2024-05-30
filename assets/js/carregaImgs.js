
// Variável global para armazenar as URLs das imagens
let imagens = {};

// Função para carregar o JSON e armazenar as URLs em variáveis
function carregarImagens() {
    fetch('imagens.json')
        .then(response => response.json())
        .then(data => {
            imagens = data;

            // Atualiza o src das imagens

            /*pagina inicial*/
            document.getElementById('banner').src = imagens.banner.url;

            document.getElementById('btnAula1').src = imagens.btnAula1.url;

            document.getElementById('btnAula2').src = imagens.btnAula2.url;

            document.getElementById('btnAula3').src = imagens.btnAula3.url;

            document.getElementById('btnAula4').src = imagens.btnAula4.url;

            document.getElementById('btnAula5').src = imagens.btnAula5.url;
        })
        .catch(error => console.error('Erro ao carregar imagens:', error));
}

// Carrega as imagens quando o documento é carregado
document.addEventListener('DOMContentLoaded', carregarImagens);