<template>
    <div>
        <li class="list-group-item" :class="className">
            <h6>
                <slot></slot>
                <small class="float-right text-muted">{{ time }}</small>
            </h6>

        </li>

        <small class="badge float-right" :class="badgeClass">{{ user }}</small>
    </div>
</template>

<script>
    export default {
        props:[
            'color',
            'user',
            'time'
        ],
        computed:{
          className(){
              return "list-group-item-"+this.color;
          },
            badgeClass(){
              return "badge-"+this.color;
            }
        },

        name: "Message"
    }
</script>

<style scoped>

</style>