function curtida() {
    const btnCurtir = document.querySelector('.curtir');
    const contador = document.querySelector('.contador');

    function handleClick() {
        btnCurtir.classList.toggle('like');
        
        if(btnCurtir.classList.contains('like')) {
            contador.innerHTML = parseInt(contador.innerText) + 1;
        } else {
            contador.innerHTML = parseInt(contador.innerText) - 1;
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