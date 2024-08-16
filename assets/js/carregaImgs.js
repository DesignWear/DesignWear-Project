
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

            document.getElementById('btnModelagem').src = imagens.btnModelagem.url;
        })
        .catch(error => console.error('Erro ao carregar imagens:', error));
}

// Carrega as imagens quando o documento é carregado
document.addEventListener('DOMContentLoaded', carregarImagens);