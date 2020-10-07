<template>
    <div>
        <section id="UploadFile" style="margin-top: 100px">
            <div class="container">
                <h3 class="text-center ">Upload PDF</h3>

                <form method="post" action="" enctype="multipart/form-data">
                    <!--input user name-->
                    <div class="form-group">
                        <label for="exampleInputUserName">User Name</label>
                        <input type="text" class="form-control" id="exampleInputUserName" placeholder="Enter User Name">
                    </div>

                    <!--author name-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Author Name">
                    </div>

                    <!--input select category-->
                    <div class="form-group">
                        <label for="sel1">Select Category: PDF</label>
                        <select class="form-control" id="sel1">
                            <option>Category One</option>
                            <option>Category Tow</option>
                            <option>Category three</option>
                        </select>
                    </div><!--end input selection-->


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Upload Images</label>
                            <input type="file" class="form-control image fa fa-home" placeholder="Source Image URL"
                                   style="background-color: red; ">
                        </div>

                        <div class="form-group col-md-6">
                            <img src="dist/images/PDF_file_icon.svg" style="width: 100px"
                                 class="img-thumbnail image-preview" alt="">
                        </div><!--render images-->
                    </div><!--end ror input images-->

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="Description" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <!--submit button-->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">submit</button>
                    </div>
                </form><!--end form-->

            </div><!--end container-->
        </section><!--end section-->

        <section class="show" style="margin-top: 100px">

            <div class="container">
                <div class="row profile">
                    <div class="col-md-3">
                        <div class="p-0 col-md-12">
                            <img src="dist/images/pdf-2.jpeg"
                                 class="img-responsive" alt="" style="width: 100%;">
                        </div><!--end col-me-12-->

                        <div class="col-md-12 mt-3 p-0">
                            <button type="button" class="btn btn-success btn-sm col-md-12"><i
                                class="fa fa-download"></i> Download
                            </button>
                            <button type="button" class="btn btn-primary btn-sm d-block col-md-12 mt-1"><i
                                class="fa fa-eye"></i> Preview
                            </button>
                            <button type="button" class="btn btn-danger btn-sm d-block col-md-12 mt-1"><i
                                class="fa fa-trash"></i> Delete
                            </button>
                        </div><!--end col-md button-->

                    </div><!--end col-md-3-->

                    <div class="col-md-9">

                        <h1>Name book : PDF Book </h1>
                        <h3>Name other : PDF Book </h3>
                        <h3>Name Category : PDF Book Storey</h3>

                        <div class="profile-content">
                            Some user related content goes here... You Can Communicate And Subscribe With Us On Our
                            Channels
                            Of Communication
                            You Can Communicate And Subscribe With Us On Our Channels Of Communication
                        </div>

                        <div class="profile-content">
                            Some user related content goes here... You Can Communicate And Subscribe With Us On Our
                            Channels
                            Of Communication
                            You Can Communicate And Subscribe With Us On Our Channels Of Communication
                        </div>
                    </div><!--end col-md-->

                </div><!--end row-->

            </div><!--end container-->

        </section>

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
    </div>
</template>

<script>
    export default {
        name: "uploade"
    }
</script>

<style scoped>

</style>
