
function menu() {
    const menu = document.querySelector('.menu');
    const open = document.querySelector('.menu-actions i.open')
    const close = document.querySelector('.menu-actions i.close');
    
    [open, close].forEach((btn) => {
        btn.addEventListener("click", () => {
            if(btn.classList.contains('open')) {
                menu.classList.remove('closed');
                open.classList.remove('active')
                close.classList.add('active');
            } else {
                close.classList.remove('active');
                open.classList.add('active')
                menu.classList.add('closed');
            }
        });
    });
}

function initMenu() {
    menu();
}

export default initMenu;