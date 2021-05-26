<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">

        <div class="navbar-menu is-active">
            <router-link to="/home" class="nav-item">Home</router-link>
            <router-link to="/about" class="nav-item">About</router-link>
        </div>

    </nav>
</template>

<script >
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>