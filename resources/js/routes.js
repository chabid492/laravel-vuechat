import VueRouter from 'vue-router';
import Task from './components/Task.vue';
import Create from './components/Create.vue';


let routes = [
    {
        path: '/',
        name:'Home',
        component: Task
    },
    {
        path: '/create',
        name:'Create',
        component: Create
    }
];


export default new VueRouter({
    routes
});