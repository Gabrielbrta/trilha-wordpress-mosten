import initMenu from "./menu/menu.js";
import initComentarios from "./comentarios/comentarios.js";
import initCurtida from "./curtir/curtida.js";
import {Avaliacao} from "./avaliacao/avaliacao.js";
import initInserirDadosBanco from "./api/inserirDadosDoBanco.js";

const avaliacao = new Avaliacao();
avaliacao.init();
initInserirDadosBanco();
initCurtida();
initComentarios();
initMenu();