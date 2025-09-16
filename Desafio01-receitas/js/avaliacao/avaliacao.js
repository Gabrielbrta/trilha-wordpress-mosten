/*                <i class="fa-regular fa-star"></i>
                <i class="fa-solid fa-star"></i> */
function avaliacao(){
    const stars = document.querySelector('.stars');
    const totalEstrelas = 5;

    function getEstrelas() {
        return document.querySelectorAll('.estrelas');
    }

    function handleClick(e, index) {
        let estrelaVazia = (totalEstrelas - 1) - index;
        console.log(estrelaVazia, index);
        stars.innerHTML = "";

        // pega o indice da estrela clicada e adiciona
        for(let i = 0; i <= index; i++) {
            stars.innerHTML += '<i class="fa-solid fa-star preenchida estrelas"></i>';
        }
        
        // o resultado da subtração entre o indice da estrela e a quantidade total de estrelas permitidas
        // o que sobrar ele adiciona uma estrela vazia
        if(estrelaVazia) {
            for(let i = 1; i <= estrelaVazia; i++) {
                stars.innerHTML += '<i class="fa-regular vazia fa-star estrelas"></i>';
            }
        }
        addEventoClickEstrelas();
    }

    function addEventoClickEstrelas() {
        const estrelas = getEstrelas();
        estrelas.forEach((estrela, index) => {
            estrela.addEventListener('click', (e) => {
                handleClick(e,index);
            });
        });
    }

    if (stars) {
        if(stars.innerHTML == "") {
            for(let i = 1; i <= totalEstrelas; i++) {
                stars.innerHTML += ` <i class="fa-regular fa-star estrelas"></i>`;
            }

            const estrelas = getEstrelas();
            estrelas.forEach((estrela, index) => {
                estrela.addEventListener('click', (e) =>{
                    handleClick(e, index);
                });
            });
        }
    }

}

function initAvaliacao() {
    avaliacao();
}

export default initAvaliacao;