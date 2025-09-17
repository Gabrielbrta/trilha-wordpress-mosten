function comentarios() {
    const containerComentario = document.querySelector(".ultimos-comentarios");
    const entradaComentario = document.querySelector(".entrada-comentario");
    const botaoEnviar = document.querySelector(".enviar");

    if(!containerComentario || !entradaComentario || !botaoEnviar) return;

    function adicionarComentario(comentario) {
        if(comentario !== "") {
            entradaComentario.value = "";
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

}

function initComentarios() {
    comentarios();
}

export default initComentarios;