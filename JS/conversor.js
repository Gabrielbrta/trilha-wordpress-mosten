const btn = document.querySelector("button");
const real = document.querySelector("input");
const result = document.querySelector("p span");
const dolar =  5.35;


btn.addEventListener("click", () => {
    if(real.value) {
        result.innerHTML = "$ " + Number(real.value / dolar).toFixed(2);
    } else {
        result.innerHTML = "Digite um valor em reais!"
    }
    
});