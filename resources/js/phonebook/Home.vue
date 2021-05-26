<template>
    <div>
        <nav class="panel">
            <p class="panel-heading">
                Vue Phonebook

                <button class="btn btn-outline-success" @click="openAdd">
                    Add New
                </button>
            </p>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input" type="text" placeholder="Search">
                    <span class="icon is-left">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
                </p>
            </div>

            <div class="row panel-block">

                <div class="col-sm-8">
                    <a href="">Data</a>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex justify-content-around">
                    <span class="panel-icon">
                        <i class="fa fa-edit text-info"></i>
                     </span>
                        <span class="panel-icon">
                        <i class="fa fa-trash text-danger"></i>
                     </span>
                        <span class="panel-icon">
                        <i class="fa fa-eye text-primary"></i>
                     </span>
                    </div>
                </div>


            </div>

        </nav>

        <Add :openmodal='addActive' @closeRequest="close"></Add>
    </div>
</template>

<script >
    import Add from "./Add.vue";
    export default {
        name: "Home",
        components: {Add},
        data(){
          return {
              addActive:'',
          }
        },
        methods:{
          openAdd(){
              this.addActive='is-active';
          },
            close(){
              this.addActive='';
            }
        },
        mounted(){
            console.log('working');
        }
    }

</script>

<style scoped>

</style>