import { DefaultLayout } from '@/core/components/layouts';


export default [
  {
    path: '/',
    component: DefaultLayout,
    redirect: 'grancursos',
    meta: { title: 'Assunto' },
    hidden: true,
    children: [
      {
        path: 'grancursos',
        name: 'grancursos.listar',
        meta: { title: 'Grancursos' },
        component: () => import(/* webpackChunkName: "grancursos-lista" */ '@/modules/grancursos/views/Lista.vue'),
      },
    ],
  },
];
