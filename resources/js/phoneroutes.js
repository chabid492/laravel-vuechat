import VueRouter from 'vue-router';
import Home from './phonebook/Home.vue';
import About from './phonebook/About.vue';



let routes = [
    {
        path: '/home',
        component: Home
    },
    {
        path: '/about',
        component: About
    },

];


export default new VueRouter({
    //mode:'history',
    routes
});