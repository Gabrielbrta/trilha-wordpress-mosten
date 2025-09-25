class Erro {
    constructor () {
        this.classeErroParent = "erro-parent";
        // classes de sucesso
        this.sucessoTitleClass = "sucesso-title"; // muda cor
        this.sucessoContainerClass = "sucesso-container";
        this.sucessoMensagem = "sucesso";
        this.hiddenElementoClass = "hidden";
        this.tituloSucesso = "Sucesso!";
        // classes de erro
        this.tituloErroMensagem = "Ocorreu um erro!";
        this.classeErro = "erro";
        this.erroContainerClass = "erro-container";
        this.erroTitleClass = "erro-title"; // muda a cor
        this.body = document.querySelector('main');
        this.popupContainer = document.createElement("div");
        this.tituloErro = document.createElement("h2");
        this.mensagemErro = document.createElement("p");
    }

    popup(mensagem, mensagemNegativa ,status) {
        if(!this.body) return;

        
        const removeElemento = () => {
            const erroContainer = this.body.getElementsByClassName(this.erroContainerClass);
            const sucessoContainer = this.body.getElementsByClassName(this.sucessoContainerClass);
            console.log(sucessoContainer);

            if(erroContainer.length > 0) {
                erroContainer[0].remove();
            }

            if(sucessoContainer.length > 0) {
                sucessoContainer[0].remove();
            }

        }

        const addSucessoClasses = (container, titulo, mensagem) => {
            container.classList.add(this.sucessoContainerClass);
            titulo.classList.add(this.sucessoTitleClass);
            mensagem.classList.add(this.sucessoMensagem);
        }
        
        
        const addClassesErro = (container, titulo, mensagem) => {
            container.classList.add(this.erroContainerClass);
            titulo.classList.add(this.erroTitleClass);
            mensagem.classList.add(this.classeErro);
        }

        const removeSucessoClasses = (container, titulo, mensagem) => {
            removeElemento();
            container.classList.remove(this.hiddenElementoClass);
            container.classList.remove(this.sucessoContainerClass);
            titulo.classList.remove(this.sucessoTitleClass);
            mensagem.classList.remove(this.sucessoMensagem);
        }

        const removeClasseErro = (container, titulo, mensagem) => {
            removeElemento();
            container.classList.remove(this.hiddenElementoClass);
            container.classList.remove(this.erroContainerClass);
            titulo.classList.remove(this.erroTitleClass);
            mensagem.classList.remove(this.classeErro);
            
        }

        let intervalo;
        clearTimeout(intervalo);

        const esconder = (elemento) => {
            intervalo = setTimeout(() => {
                elemento.classList.add(this.hiddenElementoClass);
            }, 3000);
        }
        
        if(status) {
            removeClasseErro(this.popupContainer, this.tituloErro, this.mensagemErro);
            addSucessoClasses(this.popupContainer, this.tituloErro, this.mensagemErro);    
            this.tituloErro.innerHTML = this.tituloSucesso;
            this.mensagemErro.innerHTML = mensagem;
            this.popupContainer.append(this.tituloErro);
            this.popupContainer.append(this.mensagemErro);
            this.body.append(this.popupContainer);
            esconder(this.popupContainer);
        } else {
            removeSucessoClasses(this.popupContainer, this.tituloErro, this.mensagemErro);
            addClassesErro(this.popupContainer, this.tituloErro, this.mensagemErro);

            this.tituloErro.innerHTML = this.tituloErroMensagem;
            this.mensagemErro.innerHTML = mensagemNegativa;
            this.popupContainer.append(this.tituloErro);
            this.popupContainer.append(this.mensagemErro);
            this.body.append(this.popupContainer);
            esconder(this.popupContainer);
        }
    }

}

export default Erro;