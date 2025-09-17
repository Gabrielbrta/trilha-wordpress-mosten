function avaliacao(){
    const stars = document.querySelector('.stars');
    const totalEstrelas = 5;

    if(!stars) return;

// atualizo as classes que mudam o estilo da estrela
// o parametro é o datatype-index da estrela 1-5;
    function atualizarEstrelas(estrelasIndex) {
        const estrelas = stars.querySelectorAll(".estrela");

        if(!estrelas) return;

        // verifico se o indice da estrela clicada é menor que o indice total das estrelas do container.
        estrelas.forEach((estrela, i) => {

            // se for menor, é inserido as classes que preenchem a estrela, caso contrario é inserido as classes que mostram a estrela vazia
            if(i <= estrelasIndex) {
               estrela.classList.remove("fa-regular");
               estrela.classList.add("fa-solid", "preenchida");
            } else {
                estrela.classList.remove("fa-solid", "preenchida");
                estrela.classList.add("fa-regular", "vazia");
            }
        });

    }

    // crio as estrelas dentro do container
    if (stars) {
        for(let i = 0; i < totalEstrelas; i++) {
            const star = document.createElement('i');
            star.classList.add("fa-regular", 'fa-star', 'estrela');
            star.dataset.index = i;

            // container das estrelas
            stars.appendChild(star);
        }
    }
    
    // adiciono o evento de clique no container pai e se a estrela tiver a classe 'estrela', pegamos o indice da estrela e passamos para a função que atualiza a estrela

    stars.addEventListener('click', (e) => {
        if(e.target.classList.contains('estrela')) {
            const index = parseInt(e.target.dataset.index, 10);
            atualizarEstrelas(index);
        }
    })

}

function initAvaliacao() {
    avaliacao();
}

export default initAvaliacao;