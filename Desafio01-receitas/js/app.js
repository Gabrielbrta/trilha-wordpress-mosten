import initMenu from "./menu/menu.js";
import initComentarios from "./comentarios/comentarios.js";
import initCurtida from "./curtir/curtida.js";
import initAvaliacao from "./avaliacao/avaliacao.js";
import initInserirDadosBanco from "./api/inserirDadosDoBanco.js";

initInserirDadosBanco();
initAvaliacao();
initCurtida();
initComentarios();
initMenu();