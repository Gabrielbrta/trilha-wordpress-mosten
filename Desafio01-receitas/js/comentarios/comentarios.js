const containerComentario = document.querySelector(".ultimos-comentarios");
const entradaComentario = document.querySelector(".entrada-comentario");
const botaoEnviar = document.querySelector(".enviar");

function comentarios() {
    if(!containerComentario || !entradaComentario || !botaoEnviar) return;

    function adicionarComentario(comentario) {
        if(comentario !== "") {
            entradaComentario.value = "";
            containerComentario.innerHTML += templateComentario(comentario, 1);
        }
        addComentarioBanco(botaoEnviar.getAttribute('id'),comentario,2);
    }
    async function addComentarioBanco(id,comentario, avaliacao) {
        try {
            const dados = {
                comentario: comentario,
                avaliacao: avaliacao,
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
        if(entradaComentario.value !== "") {
            const comentario = entradaComentario.value;
            adicionarComentario(comentario);
        }
    }

    if(botaoEnviar) {
        botaoEnviar.addEventListener("click", handleSubmit);
    }

}

function templateComentario(comentario, avaliacao) {
    return `
        <li>
            <div class="perfil">
                <p class="nome"><strong>Pedrinho</strong> <span class="avaliacao-comentario">${avaliacao}</span></p>
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
                console.log(resComentarios);
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