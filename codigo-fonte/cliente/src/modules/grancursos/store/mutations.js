import * as types from './types';

export default {
  [types.SET_BANCAS](state, dados) {
    state.bancas = dados;
  },
  [types.SET_ORGAOS](state, dados) {
    state.orgaos = dados;
  },
  [types.SET_ASSUNTO](state, assunto) {
    state.assuntos.push(assunto);
  },
};
