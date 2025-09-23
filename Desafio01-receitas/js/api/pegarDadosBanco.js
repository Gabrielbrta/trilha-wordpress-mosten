async function pegarDadosBanco() {
    try{
        const getReceitas = await fetch("http://localhost:3000/api.php", {method: "GET"});
        const receitas = await getReceitas.json();
        return receitas;
    }catch(erro) {
        console.error(erro);
    }
}
export default pegarDadosBanco;