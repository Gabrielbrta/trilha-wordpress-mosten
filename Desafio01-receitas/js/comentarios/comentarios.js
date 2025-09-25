import { Avaliacao } from "../avaliacao/avaliacao.js";

const containerComentario = document.querySelector(".ultimos-comentarios");
const entradaComentario = document.querySelector(".entrada-comentario");
const botaoEnviar = document.querySelector(".enviar");

function comentarios() {
    if(!containerComentario || !entradaComentario || !botaoEnviar) return;

    function adicionarComentario(comentario) {
        if(comentario !== "") {
            const avaliacao = new Avaliacao().stars.querySelector('.estrela').dataset.idAvaliacao;
            console.log(avaliacao);
            containerComentario.innerHTML += templateComentario(comentario, Number(avaliacao));
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
            fetch("http://localhost:3000/addComentario.php", {
                method: "POST",
                headers: {"Content-type": "Application/json"},
                body: JSON.stringify(dados)
            }).then((r) => console.log(r));
        } catch(error) {
            console.error(error);
        }
    }

    function handleSubmit() {
        if(String(entradaComentario.value).trim() !== "") {
            const comentario = entradaComentario.value;
            adicionarComentario(comentario);
        }
    }

    if(botaoEnviar) {
        botaoEnviar.addEventListener("click", handleSubmit);
    }

}

function templateComentario(comentario, avaliacao) {
    const estrela = new Avaliacao();
    const span = estrela.criarEstrelasAvaliacao(avaliacao);
    return `
        <li>
            <div class="perfil">
            <div>
                <p class="nome"><strong>Pedrinho</strong></p>
                 ${span.innerHTML}
            </div>
                <p class="comentario light">${comentario}</p>
            </div>
        </li>
    `
}

async function getComentarios() {
    try {
        const reqComentarios = await fetch("http://localhost:3000/getComentarios.php" + window.location.search, {method: "GET"});
        const resComentarios = await reqComentarios.json();
        if(resComentarios) {
            resComentarios.forEach((comentario) => {
                containerComentario.innerHTML += templateComentario(comentario.comentario, comentario.avaliacao);
            });
            
        }else {
            console.log("nada");
        }

    } catch(error) {
        console.error(error);
    }
}

function initComentarios() {
    getComentarios();
    comentarios();
}

export default initComentarios;