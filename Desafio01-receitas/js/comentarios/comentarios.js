import { Avaliacao } from "../avaliacao/avaliacao.js";
import Erro from "../feedback/Erro.js";

const containerComentario = document.querySelector(".ultimos-comentarios");
const entradaComentario = document.querySelector(".entrada-comentario");
const botaoEnviar = document.querySelector(".enviar");
const mediaAvaliacao = document.querySelector('.media_avaliacao');

function comentarios() {
    if(!containerComentario || !entradaComentario || !botaoEnviar || !mediaAvaliacao) return;

    function adicionarComentario(comentario) {
        if(comentario !== "") {
            const avaliacao = new Avaliacao().stars.querySelector('.estrela').dataset.idAvaliacao;
            containerComentario.append(templateComentario(comentario, Number(avaliacao)));
            addComentarioBanco(botaoEnviar.getAttribute('id'),comentario, Number(avaliacao));
        }
    }
    async function addComentarioBanco(id,comentario, avaliacao) {
        try {
            const dados = {
                comentario: comentario,
                avaliacao: Number(avaliacao),
                id: id,
            }
            fetch("http://localhost:3000/Post/addComentario.php", {
                method: "POST",
                headers: {"Content-type": "Application/json"},
                body: JSON.stringify(dados)
            }).then((r) => {
                const msgSucesso = "Seu comentário foi adicionado com sucesso!";
                const msgErro = "Não foi possivel adicionar o seu comentário, tente novamente mais tarde!";
                const erro = new Erro();
                erro.popup(msgSucesso, msgErro, r.ok);
            });
        } catch(error) {

            console.error(error);
        }
    }

    function handleSubmit() {
        if(String(entradaComentario.value).trim() !== "") {
            const comentario = entradaComentario.value;
            adicionarComentario(comentario);
            entradaComentario.value = '';
        } else {
            const msgErro = "Campo de comentário vazio!";
            const erro = new Erro();
            erro.popup("", msgErro, false);
        }
    }

    if(botaoEnviar) {
        botaoEnviar.addEventListener("click", handleSubmit);
    }

}

function templateComentario(comentario, avaliacao) {
    const estrela = new Avaliacao();
    const span = estrela.criarEstrelasAvaliacao(avaliacao);
    const li = document.createElement('li');
    
    const divPerfil = document.createElement('div');
    divPerfil.classList.add("perfil")

    const div = document.createElement('div')

    const nome = document.createElement('p');
    nome.classList.add("nome");

    const pComentario = document.createElement('p');
    pComentario.className = "comentario light";

    const destaque = document.createElement('strong');
    destaque.innerText = "pedrinho";

    nome.append(destaque);
    //estrelas dos comentarios
    pComentario.textContent = comentario;

    div.append(nome);
    div.append(span);
    divPerfil.append(div);
    divPerfil.append(pComentario);
    li.append(divPerfil);
    return li;
}

async function getComentarios() {
    try {
        const reqComentarios = await fetch("http://localhost:3000/Get/getComentarios.php" + window.location.search, {method: "GET"});
        const resComentarios = await reqComentarios.json();

        // adiciono a media de avaliações
        if(mediaAvaliacao && resComentarios[0].media_avaliacao) {
            mediaAvaliacao.innerHTML += Number(resComentarios[0].media_avaliacao).toFixed(1) + " / 5";
        } 

        // adiciono os comentarios com a resposta da requisição
        if(resComentarios) {
            resComentarios.forEach((comentario) => {
                containerComentario.append(templateComentario(comentario.comentario, comentario.avaliacao));
            });
            
        }else {
            console.log("nada");
        }

    } catch(error) {
        console.error(error);
        mediaAvaliacao.innerHTML += "seja o primeiro a avaliar!";
    }
}

function initComentarios() {
    if(!containerComentario || !entradaComentario || !botaoEnviar) return;
    getComentarios();
    comentarios();
}

export default initComentarios;