export class Avaliacao{
    constructor() {
        this.stars = document.querySelector('.stars');
        this.btnEnviarComentario = document.querySelector('.enviar');
        this.totalEstrelas = 5;
        if(this.stars || this.btnEnviarComentario) return;
    };

    adicionarEstrelas(){
        for(let i = 0; i < this.totalEstrelas; i++) {
            const star = document.createElement('i');
            star.classList.add("fa-regular", 'fa-star', 'estrela');
            star.dataset.index =  i;

            this.stars.appendChild(star);
            this.btnEnviarComentario.setAttribute("disabled", true);
        }
    }

// ao clicar na estrela ele muda as classes e estilos
    atualizarEstrelas(datasetIndex) {
        const estrelas = this.stars.querySelectorAll('.estrela');

        if(!estrelas) return;
        estrelas.forEach((estrela, i) => {
            this.btnEnviarComentario.removeAttribute('disabled');

            if(i <= datasetIndex) {
                estrela.classList.remove("fa-regular")
                estrela.classList.add("fa-solid", "preenchida");
                estrela.dataset.idAvaliacao = Number(datasetIndex) + 1;
            }else{
                estrela.classList.remove("fa-solid", "preenchida");
                estrela.classList.add("fa-regular", "vazia");
                estrela.dataset.idAvaliacao = Number(datasetIndex) + 1;
            }
        });
    }

// cria as estrelas nos comentarios sem opção de interagir
    criarEstrelasAvaliacao(numero_avaliacao) {
        let htmlEstrelas = document.createElement('span');
        for(let i = 1; i <= this.totalEstrelas; i++) {
            if(numero_avaliacao >= i) {
                const star = document.createElement("i");
                star.classList.add("fa-solid", 'fa-star', 'estrela', 'preenchida');
                htmlEstrelas.append(star);
                
            } else {
                const star = document.createElement("i");
                star.classList.add("fa-regular", 'fa-star', 'estrela');
                htmlEstrelas.append(star);
            }
        }
        return htmlEstrelas;
    }

// adiciona os eventos de clique no container das estrelas
    addEvents() {
        this.stars.addEventListener("click", (e) => {
            const index = parseInt(e.target.dataset.index, 10);
            this.atualizarEstrelas(index);
        });
    }

// inicia os eventos e adiciona as estrelas vazias
    init() {
        this.adicionarEstrelas();
        this.addEvents();
    }

}
