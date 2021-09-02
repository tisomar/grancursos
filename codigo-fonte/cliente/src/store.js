import Vue from 'vue';
import Vuex from 'vuex';

import app from '@/core/store/app/';
import shared from '@/modules/shared/store/';
import assunto from '@/modules/grancursos/store/';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    app,
    shared,
    assunto,
  },
  getters: {
    route: state => state.route,
  },
  strict: process.env.NODE_ENV !== 'production',
});
