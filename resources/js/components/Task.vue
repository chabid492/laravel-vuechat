<template>
    <div>
        <table class="table table-bordered table-striped">

            <tr class="bg-light">
                <th width="30%">Task</th>
                <th width="30%">Creator</th>
                <th width="30%">Description</th>
            </tr>

            <tr v-for="list in lists" :key="list.id">
                <td>{{ list.name }}</td>
                <td>{{ list.user.name }}</td>
                <td>{{ list.description }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        name: "Task",
        data() {
            return{
                lists:[]
            }
        },
        mounted(){
            this.loadData();
        },
        methods:{
            loadData:function(){
                axios.get('/list')
                    .then(res=>{
                    if(res.status==200){
                        console.log(res.data.tasks);
                        this.lists=res.data.tasks;
                    }

                }).catch(err=>{
                    console.log(err)
                });
            }
        }
    }
</script>

<style scoped>

</style>