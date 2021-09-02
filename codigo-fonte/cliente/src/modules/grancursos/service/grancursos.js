import * as service from '../../shared/service/base';

export const buscarBancas = () => service.getRequest('/grancursos/banca');
export const buscarOrgaos = () => service.getRequest('/grancursos/orgao');
export const buscarAssuntos = (idBanca, idOrgao) => service.getRequest(
  `grancursos/assunto?id_banca=${idBanca}&id_orgao=${idOrgao}`,
);
