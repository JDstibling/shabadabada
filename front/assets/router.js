console.log('%c' + "router.js loaded", 'color: #0bf; font-size: 1rem; background-color:#fff');


// =============== STEP Routing =============== 
//loading of viewsJS
import Vue from 'vue';

//loading the router library from viewJS
import VueRouter from 'vue-router';

//loading components
import Home from './views/Home';
import CategoriesList from './views/CategoriesList';
import Game from './views/Game';
import Error404 from './views/Error404';
import Team from './views/Team';
import Carrousel from './views/Carrousel';

// vuejs routes configuration to use the router
Vue.use(VueRouter);

import Configuration from './Configuration';
import CategoryService from './services/CategoryService';
//const configuration = new Configuration();
//let test = configuration.getBaseURI();

// router configuration
const router = new VueRouter({
  mode: 'history', // History mode allows us to keep the same url when changing pages

  //base: configuration.getBaseURI(),

  base: 'apo-Shabadabada/public/front/',

  routes: [
    {
      name: 'home', 
      path: '/',       
      component: Home 
    },
    {
      name: 'categoriesList', 
      path: '/categories', 
      component: CategoriesList
    },
    {
      name: 'game', 
      path: '/game', 
      component: Game
    },
    {
      name: 'error404', 
      path: '/error404', 
      component: Error404
    },
    {
      name: 'team', 
      path: '/team', 
      component: Team
    },
    {
      name: 'carrousel', 
      path: '/carrousel', 
      component: Carrousel
    },
    
  ]
});

export default router;
