import Vue from 'vue'
import VueRouter from 'vue-router'
import News from '../views/News'
import Post from '../views/Post'
import Register from '../views/Register'
import Login from '../views/Login'
import Home from '../views/Home'
import Favorites from '../views/Favorites'
import Filtration from '../views/Filtration'
import Favoriteslist from "@/views/List";
Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        meta: {layout: 'main'},
        component: Home
    },
  {
      path: '/login',
      name: 'login',
      meta: {layout: 'empty'},
      component: Login
  },
    {
        path: '/favorites',
        name: 'favorites',
        meta: {layout: 'main'},
        component: Favorites
    },
    {
        path: '/news',
        name: 'news',
        meta: {layout: 'main'},
        component: News
    },
    {
        path: '/news/:url',
        name: 'post',
        meta: {layout: 'main'},
        component: Post
    },
    {
        path: '/register',
        name: 'register',
        meta: {layout: 'empty'},
        component: Register
    },
    {
        path: '/list',
        name: 'list',
        meta: {layout: 'main'},
        component: Favoriteslist
    },
    {
        path: '/filtration',
        name: 'filtration',
        meta: {layout: 'main'},
        component: Filtration
    },
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
