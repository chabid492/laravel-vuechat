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

//for notification
import Toaster from 'v-toaster';
Vue.use(Toaster,{timeout:2000});
import 'v-toaster/dist/v-toaster.css';

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
          user:[],
          color:[],
            time:[]
        },

        typing:'',
        numberOfusers:0,
    },

    //typing show when any user type
    watch:{
      message(){
          Echo.private('chat')
              .whisper('typing', {
                  name: this.message
              });
      }
    },
    methods:{
        send(){
            //push message to chat body
            if (this.message.length !=0){
                this.chat.message.push(this.message);
                this.chat.user.push('you');
                this.chat.color.push('success');
                this.chat.time.push(this.getTime());
                //console.log(this.message);

                //send message for broadcast
                axios.post('/send', {
                    message: this.message,

                })
                    .then(response=> {
                        //console.log(response);
                        //make empty message
                        this.message='';
                    })
                    .catch(error=> {
                        console.log(error);
                    });
            }

        },

        getTime() {
            let time=new Date();
            return time.getHours()+":"+time.getMinutes();
        }
    },

    //receiving broadcasting
    mounted(){
        Echo.private('chat')
            .listen('.message.sent', (e) => {
                this.chat.message.push(e.message);
                this.chat.user.push(e.user);
                this.chat.color.push('info');
                this.chat.time.push(this.getTime());
                //console.log(e);
            })
            .listenForWhisper('typing', (e) => {
                if(e.name != ''){
                    this.typing='typing...';
                }else {
                    this.typing='';
                }
            });

        Echo.join(`chat`)
            .here((users) => {
                this.numberOfusers=users.length;
            })
            .joining((user) => {
                this.numberOfusers +=1;
                this.$toaster.success(user.name+' joined the chat room');
                //console.log(user);
            })
            .leaving((user) => {
                this.numberOfusers -=1;
                this.$toaster.warning(user.name+' leaved the chat room');
                //console.log(user);
            })
            .error((error) => {
                console.error(error);
            });
    },
});