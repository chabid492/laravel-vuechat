<template>
    <div>
        <table class="table table-bordered table-striped table-responsive">

            <tr class="bg-light">
                <th width="30%">Task</th>
                <th width="30%">Creator</th>
                <th width="30%">Description</th>
                <th width="30%">Action</th>
            </tr>

            <tr v-for="list in lists" :key="list.id">
                <td>{{ list.name }}</td>
                <td>{{ list.user.name }}</td>
                <td>{{ list.description }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="#" @click="deleteList(list.id)">
                            <i class="fa fa-trash text-danger"></i>
                        </a>

                        <a href="#" class="ml-3" >

                            <router-link :to="{name: 'Edit', params: { id: list.id }}" >
                                <i class="fa fa-edit text-info"></i>
                            </router-link>

                        </a>
                    </div>
                </td>
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
                axios.get('/task')
                    .then(res=>{
                    if(res.status==200){
                        console.log(res.data.tasks);
                        this.lists=res.data.tasks;
                    }

                }).catch(err=>{
                    console.log(err)
                });
            },
            deleteList(id) {
                axios.delete(`/task/${id}`)
                    .then(response => {
                        let i = this.lists.map(data => data.id).indexOf(id);
                        this.lists.splice(i, 1)
                    });
            }
        }
    }
</script>

<style scoped>

</style>