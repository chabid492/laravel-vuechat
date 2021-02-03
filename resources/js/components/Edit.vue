<template>
    <div>
        <h3 class="text-center">Edit List</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateProduct">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="list.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="list.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: {}
            }
        },

        created() {
            axios.get(`/task/${this.$route.params.id}/edit`)
                .then((res) => {
                    this.list=res.data.task;
                    console.log(res.data.task);
                });
        },
        methods: {
            updateProduct() {
                axios.patch(`task/${this.$route.params.id}`, this.list)
                    .then((res) => {
                        this.$router.push({ name: 'Home' });
                    });
            }
        }
    }
</script>