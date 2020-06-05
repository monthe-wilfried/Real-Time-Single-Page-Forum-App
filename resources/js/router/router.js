import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login';
import Signup from "../components/login/Signup";
import Forum from "../components/forum/Forum";
import Logout from "../components/login/Logout";

const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: Signup },
    { path: '/forum', component: Forum, name: 'forum' }, // 'name' is the route name
    { path: '/logout', component: Logout },
]


const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'history', // this is to remove the # symbol in the url
})

export default router
