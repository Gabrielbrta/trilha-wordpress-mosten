function upload() {
    const uploadBtn = document.querySelector("#upload-btn");
    const inputUpload = document.querySelector("#imagem-upload");
    if(!uploadBtn || !inputUpload) return;

    uploadBtn.addEventListener("click", () => {
        inputUpload.click();
    });


    function lerConteudoDoArquivo(arquivo) {
        // Nova promessa, semelhante ao req res do node. Nesse caso é o resolve e reject
        return new Promise((resolve, reject) => {
            // leitor é um objeto de leitura de arquivo
            const leitor = new FileReader();
            // se ler o arquivo significa que deu certo (onload)
            leitor.onload = () => {
                // passo o resolve que deu certo, com o url result e nome do arquivo para tratamentos de erro ou feedback e uso do arquivo
                resolve({url: leitor.result, nome:arquivo.name});
            }

            // leitor onerror é quando da errado a leitura do arquivo e ele retorna para tratar erros ou feedback
            leitor.onerror = () => {
                reject(`Erro na leitura do arquivo ${arquivo.name}`);
            }

            // retorna a url do arquivo codificado em base64
            //readAsDataURL: Este método lê o arquivo e o codifica como um Data URL, uma string base64 que representa os dados do arquivo. Isso permite que a imagem seja mostrada diretamente no navegador sem precisar ser enviada para um servidor primeiro.
            leitor.readAsDataURL(arquivo);
        });
    }


}


function initUpload() {
    upload();
}

initUpload();