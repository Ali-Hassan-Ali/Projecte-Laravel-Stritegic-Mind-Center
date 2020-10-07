<template>
    <div>
        <!--loading pages-->
        <div class="ff d-flex text-center m-auto align-items-center">

            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
                Loading.....
            </div>

        </div><!--end of loading-->

        <section id="banner"> <!--end of banner section-->

            <div class="movies"><!--owl-carousel owl-theme-->

                <div class="movie text-white d-flex justify-content-center align-items-lg-center">

                    <div class="movie__bg"
                         style="background: url('./dist/images/Library of the future team.jpg') center/cover no-repeat;"></div>

                </div><!--end of movie-->

            </div><!--end of movies-->

        </section> <!--end of banner section-->


        <footer id="about" class="bg-primary text-center text-white pt-5 pb-5">
            <h2>About US</h2>
            <span>
        Navbar navigation links build on our .nav options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned.
    </span>
        </footer><!--end of footer-->

        <section id="listing">

            <div class="container">

                <div class="row my-4">

                    <div class="col-12 d-flex justify-content-between">

                        <h3 class="listing_title text-success fw-300">New PDF</h3>

                        <a href="" class="align-self-center text-capitalize text-primary">see all</a>

                    </div>

                </div><!--end of row-->

                <div class="owl-carousel owl-movie">

                    <a href="/show.html">
                        <div class="movie p-0 text-center">

                            <img src="dist/images/pdf-2.jpeg" alt="" class="img-fluid">
                            <span class="text-center">PDF One</span>
                        </div><!--end of col-->
                    </a>
                    <a href="/show.html">
                        <div class="movie p-0 text-center">

                            <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid" style="height: 250px">
                            <span class="text-center">PDF One</span>
                        </div><!--end of col-->
                    </a>
                    <a href="/show.html">
                        <div class="movie p-0 text-center">

                            <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                            <span class="text-center">PDF One</span>
                        </div><!--end of col-->
                    </a>
                    <a href="/show.html">
                        <div class="movie p-0 text-center">

                            <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                            <span class="text-center">PDF One</span>
                        </div><!--end of col-->
                    </a>

                </div><!--end of row-->


            </div><!--end of container-->

        </section><!--end of listing-->

        <section id="listing">

            <div class="container">

                <div class="row my-4">

                    <div class="col-12 d-flex justify-content-between">

                        <h3 class="listing_title text-success fw-300">Category Language</h3>

                        <a href="" class="align-self-center text-capitalize text-primary">see all</a>

                    </div>

                </div><!--end of row-->

                <div class="owl-carousel owl-movie">

                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF One</span>
                    </div><!--end of col-->
                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF Tow</span>
                    </div><!--end of col-->
                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF three</span>
                    </div><!--end of col-->
                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF For</span>
                    </div><!--end of col-->

                </div><!--end of row-->


            </div><!--end of container-->

        </section><!--end of listing-->

        <section id="listing">

            <div class="container">

                <div class="row my-4">

                    <div class="col-12 d-flex justify-content-between">

                        <h3 class="listing_title text-success fw-300">Category Novels</h3>

                        <a href="" class="align-self-center text-capitalize text-primary">see all</a>

                    </div>

                </div><!--end of row-->

                <div class="owl-carousel owl-movie">

                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF One</span>
                    </div><!--end of col-->
                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF Tow</span>
                    </div><!--end of col-->
                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF three</span>
                    </div><!--end of col-->
                    <div class="movie p-0 text-center">

                        <img src="dist/images/PDF_file_icon.svg" alt="" class="img-fluid">
                        <span class="text-center">PDF For</span>
                    </div><!--end of col-->

                </div><!--end of row-->


            </div><!--end of container-->

        </section><!--end of listing-->

    </div><!--end  main div-->

</template><!--end template-->

<script>
    export default {
        name: "index"
    }
</script>

<style scoped>

</style>
