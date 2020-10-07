<template>
        <section id="banner">

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-black-transparent">
                <div class="container">
                    <router-link class="navbar-brand" style="font-size: 30px" to="/"><span
                        class="font-weight-bold" style="color: #56c008">Fu</span><span
                        class="font-weight-bold text-primary">Team</span></router-link>
                    <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item active">
                                <a class="nav-link color-green" to="#about">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <router-link class="nav-link" to="#New-PDF">New PDF</router-link>
                            </li>
                            <li class="nav-item active">
                                <router-link class="nav-link" to="/all">All PDF</router-link>
                            </li>
                            <li class="nav-item active">
                                <router-link class="nav-link" to="uploadPDF">Uploads PDF</router-link>
                            </li>
                            <li class="nav-item active">
                                <router-link class="nav-link" to="MyOwnOffice">My own office</router-link>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language
                                </a>
                                <div class="dropdown-menu pt-0 pb-0" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Arabic</a>
                                    <a class="dropdown-item" href="#">English</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <router-link to="/login" class="btn btn-primary mr-0 mr-md-2 mb-2 mb-md-0"><i class="fa fa-user"></i>
                                Login</router-link>
                            <router-link to="Register.html" class="btn btn-outline-success"><i class="fa fa-user-plus"></i> Register</router-link>
                        </ul>

                    </div><!--end navbar-collapse-->
                </div><!--end container-->
            </nav><!--end navbar-->

        </section> <!--end of banner section-->
</template>

<script>
    export default {
        name: "navbar"
    }
</script>

<style scoped>

</style>
