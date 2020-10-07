<template>
    <div>
        <navBar></navBar>
        <router-view></router-view>
        <Footer></Footer>
    </div>
</template>

<script>
    import NavBar from './components/navbar'
    import Footer from './components/footer'

    export default {
        name: "Min",
        components: {
            NavBar,
            Footer
        }
    }
</script>
