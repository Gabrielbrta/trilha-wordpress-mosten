function curtida() {
    const btnCurtir = document.querySelector('.curtir');
    const contador = document.querySelector('.contador');

    if(!btnCurtir || !contador) return;

    function handleClick() {
        btnCurtir.classList.add('like');
        
        if(btnCurtir.classList.contains('like')) {
            contador.innerHTML = parseInt(contador.innerText) + 1;
        }
    }

    if(btnCurtir) {
        btnCurtir.addEventListener('click', handleClick);
    }

}

function initCurtida() {
    curtida();
}

export default initCurtida;