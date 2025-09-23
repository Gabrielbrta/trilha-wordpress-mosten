import pegarDadosBanco from "./pegarDadosBanco.js";


async function inserirDadosDoBanco() {
    const cardContainer = document.querySelector(".cards-container");
    const dadosBanco = await pegarDadosBanco();
    if(!dadosBanco || !cardContainer) return;

    dadosBanco.forEach((dados) => {
        cardContainer.innerHTML += `
                    <article class="card" data-id="${dados.id}">
                        <img src="${dados.foto}" alt="Foto de ${dados.nome}">
                        <p class="level">${dados.dificuldade}</p>
                        <div class="card-content">
                            <h3>${dados.nome}</h3>
                            <div class="card-stats light">
                                <p><i class="fa-regular fa-clock"></i> <span>${dados.tempo}</span></p>
                                <p><i class="fa-solid fa-user-group"></i><span>${dados.porcao} porções</span></p>
                            </div>
                            <a href="./src/views/receita.php?id=${dados.id}" data-btn-id="${dados.id}" class="btn btn-details">Ver Receita</a>
                        </div>
                    </article>
                `;
    });
}

function initInserirDadosBanco() {
    inserirDadosDoBanco();
}

export default initInserirDadosBanco;