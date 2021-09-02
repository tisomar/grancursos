import * as types from './types';
import * as grancursosService from '../service/grancursos';

export const buscarBancasAction = ({ commit }) => grancursosService
  .buscarBancas()
  .then((response) => {
    commit(types.SET_BANCAS, response.data.data);
    return response;
  });

export const buscarOrgaosAction = ({ commit }) => grancursosService
  .buscarOrgaos()
  .then((response) => {
    commit(types.SET_ORGAOS, response.data.data);
    return response;
  });

export const cadastrarAssuntoAction = ({ commit }, params) => {
  grancursosService.buscarAssuntos(params.banca.id, params.orgao.id)
    .then((response) => {
      const grancursos = params;
      grancursos.assuntos = response.data.data;
      commit(types.SET_ASSUNTO, grancursos);
    });
};
