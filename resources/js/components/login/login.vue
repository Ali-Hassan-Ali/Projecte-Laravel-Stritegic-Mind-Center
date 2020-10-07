<template>
    <div>

        <section id="login">

            <div class="bg__login"
                 style="background: linear-gradient(rgba(0,0,0, 0.6), rgba(0,0,0, 0.7)), url('./dist/images/p2.jfif') center/cover no-repeat;"></div>

            <div class="container">

                <div class="row">

                    <div class="col-10 mx-auto col-md-8 bg-white mx-auto pt-4">
                        <h2 class="fw-300 text-center"><span
                            class="font-weight-bold" style="color: #56c008">Fu</span><span
                            class="font-weight-bold text-primary">Team</span></h2>
                        <hr><!--end title-->

                        <form action="" method="">
                            <!--Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <!--password -->
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>

                            <!--                    Login by Remember Me-->

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label for="customCheck1" class="custom-control-label">Remember Me</label>
                                </div>
                            </div>
                            <!--                    Login form-->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <p class="text-center">Create New Account <a href="Register.html">Register</a></p>
                            <hr>
                            <!--                    Login by Gmail and Facebook-->
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" style="background: #3b5998"><span
                                    class="fa fa-facebook"></span> Login by Facebook
                                </button>
                                <button class="btn btn-block btn-primary" style="background: #ea4335"><span
                                    class="fa fa-google"></span> Login by Gmail
                                </button>
                            </div>

                            <hr>
                            <p class="text-center">Redirect To Home Pages <a href="index.html">Home</a></p>

                        </form><!--end fo form-->

                    </div><!--end of col-auto-->

                </div><!--end of row-->

            </div><!--end of container-->

        </section> <!--end of banner section-->
    </div>
</template>

<script>
    export default {
        name: "login"
    }
</script>

<style scoped>

</style>
