import VueRouter from 'vue-router';
import Task from './components/Task.vue';
import Create from './components/Create.vue';
import Edit from './components/Edit.vue';


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
    },
    {
        path: '/edit/:id',
        name:'Edit',
        component: Edit
    }
];


export default new VueRouter({
    routes
});