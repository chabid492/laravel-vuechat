<template>
    <div>
        <h3 class="text-center">Create List</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addTask" >
                    <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" class="form-control" v-model="task.name">
                        <small v-if="errors.name" class="text-danger">{{ errors.name }}</small>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="task.description">
                        <small v-if="errors.description" class="text-danger">{{ errors.description }} </small>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                task: {},
                errors: {},
            }
        },
        methods: {
            addTask() {
                axios.post('/task', this.task)
                    .then(response => (
                        this.$router.push({ name: 'Home' })
                    ))
                    .catch(error => {
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                            console.log(error.response.data);
                        }
                        console.log('Still not saved');
                    })
                    .finally(() => this.loading = false)
            }
        }
    }
</script>