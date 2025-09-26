function curtida() {
    const btnCurtir = document.querySelector('.curtir');
    const contador = document.querySelector('.contador');

    if(!btnCurtir || !contador) return;

    let intervaloCurtir;
    function handleClick(e) {
        btnCurtir.classList.add('like');
        if(btnCurtir.classList.contains('like')) {
            contador.innerHTML = parseInt(contador.innerText) + 1;
        }

        clearTimeout(intervaloCurtir);
        intervaloCurtir = setTimeout(async () => {
            try {
                const dados = {
                    id: e.target.dataset.btnId,
                    curtida: parseInt(contador.innerText)
                }
                ;
                fetch("http://localhost:3000/Post/addCurtir.php", {
                    method: "POST",
                    headers: {"Content-type": "Application/json"},
                    body: JSON.stringify(dados),
                });
            }catch(error) {
                console.error(error);
            }
        }, 1500);
        
    }

    if(btnCurtir) {
        btnCurtir.addEventListener('click', handleClick);
    }

}

function initCurtida() {
    curtida();
}

export default initCurtida;