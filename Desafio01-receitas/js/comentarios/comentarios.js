function comentarios() {
    const containerComentario = document.querySelector(".ultimos-comentarios");
    const entradaComentario = document.querySelector(".entrada-comentario");
    const botaoEnviar = document.querySelector(".enviar");

    function adicionarComentario(comentario) {
        if(comentario !== "") {
            containerComentario.innerHTML += `
        <li>
            <div class="perfil">
                <p class="nome"><strong>Pedrinho</strong></p>
                <p class="comentario light">${comentario}</p>
            </div>
        </li>`;
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
    /*
        <li>
            <div class="perfil">
                <p class="nome"><strong>João</strong></p>
                <p class="comentario light">Gostei da receita</p>
            </div>
        </li>
    */
}

function initComentarios() {
    comentarios();
}

export default initComentarios;