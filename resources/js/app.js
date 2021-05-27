require('./bootstrap');
window.Vue = require('vue');



// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import Example from './components/ExampleComponent.vue';

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

//plugin
import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll);

//Vue.component('message',require('./chat/Message.vue').default);
let Chat= require('./chat/Message.vue').default;
const app = new Vue({
    el: '#app',
    components:{
      Chat
    },
    //router,
    data:{
        message:'',
        chat:{
          message:[],
        },
    },
    methods:{
        send(){
            if (this.message.length !=0){
                this.chat.message.push(this.message);
                //console.log(this.message);
            }
            this.message='';
        }
    }
});