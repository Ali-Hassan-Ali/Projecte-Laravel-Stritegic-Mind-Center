@extends('layouts.app')

@section('content')
    @include('layouts.include._banner')
    <div class="skitter-large-box">
        <div class="skitter skitter-large with-dots">
            <ul>
                <li><a href="#cubeRandom"><img src="{{ asset('./dist/images/skitter/111.png')}}" class="cubeRandom"/></a>
                    <div class="label_text"></div>
                </li>
                <li><a href="#block"><img src="{{ asset('./dist/images/skitter/112.png')}}" class="block"/></a>
                    <div class="label_text"></div>
                </li>
                <li><a href="#cubeStop"><img src="{{ asset('./dist/images/skitter/113.PNG')}}" class="cubeStop"/></a>
                    <div class="label_text"></div>
                </li>
            </ul>
        </div>
    </div><!--end of skitter-->

    <section id="about" class="bg-primary">
        <div class="container text-center text-white p-4">
            <h2>ABOUT US</h2>
            <p class="wow bounceInDown" data-wow-duration="1s">Strategic Mind Center was founded in 2020. More than a
                decade
                of our staff experience, we are specializing
                and unique Center in Strategic programs and one of the country's well respected consultant companies in
                training and business development. Strategic Center provides More than 80 Training Programs in strategic
                management techniques, Business management & HR, Capacity Building and Quality management system for people
                development and process improvement. training have allowed us to continuously improve our understanding,
                thus able to deliver services that would exceed our customer expectation. By providing training innovation
                and leading edge solutions, Strategic Mind Center has continuously assisted our corporate customers improve
                their business process and enhance their position amidst the competitive environment.
            </p>
        </div><!--end of container-->
    </section><!-- Jquery -->

    <setion id="current-programs" class="text-center">

        <h2 class="p-4">CURRENT PROGRAMS</h2>

        <div class="owl-carousel owl-poster wow bounceInLeft" data-wow-duration="10s">
            <div class="poster">
                <img src="./dist/images/11.png" width="80%" height="460" alt="">
                <p class="bg-success text-white ">online Course</p>
            </div><!--end of poster-->
            <div class="poster">
                <img src="./dist/images/121.jpg" height="460" alt="">
                <p class="bg-dark text-white ">online Course</p>
            </div><!--end of poster-->
            <div class="poster">
                <img src="./dist/images/12.jpg" width="80%" height="460" alt="">
                <p class="bg-primary text-white ">online Course</p>
            </div><!--end of poster-->
            <div class="poster">
                <img src="./dist/images/12.jpg" width="80%" height="460" alt="">
                <p class="bg-danger text-white ">online Course</p>
            </div><!--end of poster -->
        </div><!--end of owl-carousel-->

    </setion><!--end section current programs-->

    <section id="Our-Trainer" class="text-center p-4 bg-dark text-white">
        <h2>OUR TRAINER</h2>
        <div class="owl-carousel owl-trainer pt-4 wow bounceInDown" data-wow-duration="4s">

            <div class="trainer">
                <img src="./dist/images/avatar.png" class="m" alt="">
                <h3>Ali Hassan Ali</h3>
                <p>we are specializing and unique Center in Strategic programs and one of the country's well respected
                    consultant companies in training and business developmentwe are specializing and unique Center in
                    Strategic
                    programs and one of the country's well respected consultant companies in training and business
                    development</p>
            </div><!--end of trainer-->

            <div class="trainer">
                <img src="./dist/images/avatar.png" class="m" width="10%" alt="">
                <h3>Ali Hassan Ali</h3>
                <p>we are specializing and unique Center in Strategic programs and one of the country's well respected
                    consultant companies in training and business developmentwe are specializing and unique Center in
                    Strategic
                    programs and one of the country's well respected consultant companies in training and business
                    development</p>
            </div><!--end of trainer-->

        </div><!--end of owl-carousel-->
    </section><!--end section Our-Trainer-->

    <section id="Our-Service" class="text-center text-white bg-primary">

        <h2 class="pt-3 text-white">OUR SERVICE</h2>

        <div class="row text-center pl-4" style="width: 100%">

            <div class="col-12 col-md-3 mb-4 wow bounceInRight" data-wow-duration="2s">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Trainning</h3>
                        <p>Strategic Mind Center provides More than 80 Training Programs in strategic
                            management techniques, Business management &amp; HR, Marketing and sales, Capacity Building and
                            Quality management system for people development and process improvement. Our professional
                            Trainer able to deliver programs that would exceed our customer expectation. </p>
                    </div><!--end of card body-->
                </div><!--end of card-->
            </div><!--end of col-->

            <div class="col-12 col-md-3 mb-4 wow bounceInUp" data-wow-duration="2s">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Coaching</h3>
                        <p>Strategic Mind Center provides all Coaching Levels Programs according to
                            standard school or Arabization one in strategic management, intuitional excellence, life, school
                            and family coaching. Also provide individual coaching and sections to increase personal
                            targeting and objectives by Our professional coaching Trainer to exceed our customer expectation
                            and needs</p>
                    </div><!--end of card body-->
                </div><!--end of card-->
            </div><!--end of col-->

            <div class="col-12 col-md-3 mb-4 wow bounceInDown" data-wow-duration="2s">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Counsaltant</h3>
                        <p>Strategic Mind Center provides consulting rather individually or to
                            organization and businessunits in some filed like:- Systems Building and preparing to
                            Accreditation- Strategic Planning &amp; Formulation - In door training and training needs-
                            Self-Assessment and EFQM Deployment - Institutional and Strategic Coaching - Others By
                            professional coaching &amp; Expert from Sudan and collaboration &amp; our successful partnership
                            worldwide to meet and exceed our customer expectation in order to achieve targeting and
                            objectives
                        </p>
                    </div><!--end of card body-->
                </div><!--end of card-->
            </div><!--end of col-->

            <div class="col-12 col-md-3 mb-4 wow bounceInLeft" data-wow-duration="2s">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Research &amp; Studies</h3>
                        <p>Strategic Mind Center provides Research and studies to organization and
                            business units in some filed like:- Visibilities studies - Market research and studies- Trend
                            measurement and perception - Customers and employee satisfaction - Applied and theoretical
                            research and problem solving- Data analysis and support - Others By professional coaching &amp;
                            Experts from Sudan and collaboration by our successful partnership worldwide
                        </p>
                    </div><!--end of card body-->
                </div><!--end of card-->
            </div><!--end of col-->

        </div><!--end of row-->

    </section><!--end of section Our-Service-->

    <section id="Article" class="pt-5 mb-0" style="background: black">
        <div class="container">

            <h2 class="text-center text-white pb-4">PUBLIC CALENDER</h2>

            <div class="col-md-12 p-0">
                <!-- Box Comment -->
                <div class="box box-widget p-0">
                    <div class="box-header with-border">
                        <div class="user-block">
                            <img class="img-circle m" src="./dist/images/avatar.png" alt="User Image">
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">Shared publicly - 7:30 PM Today</span>
                        </div>
                    </div><!--end of box-header-->

                    <div class="box-body wow bounceInDown" data-wow-duration="3s">
                        <p>
                            took this photo this morning. What do you guys think? took this photo this morning. What do you
                            guys think? took this photo this morning. What do you guys think? took this photo this morning.
                            What do you
                            guys think? took this photo this morning. What do you guys think? took this photo this morning.
                            What do you
                            guys think? took this photo this morning. What do you guys think? took this photo this morning.
                            What do you
                            guys think?
                        </p>
                        <img class="img-responsive pad" src="./dist/images/post/mind.jpg" width="100%" alt="Photo">

                        <p>I took this photo this morning. What do you guys think?</p>
                        <button type="button" class="btn btn-outline-dark btn-xs"><i class="fa fa-thumbs-o-down"></i>
                            DisLike
                        </button>
                        <button type="button" class="btn btn-outline-dark btn-xs"><i class="fa fa-thumbs-o-up"></i> Like
                        </button>
                        <span class="pull-right text-muted">127 likes - 3 comments</span>
                    </div><!--end of box-body-->

                    <div class="box-footer box-comments" style="">
                        <div class="box-comment wow bounceInUp" data-wow-duration="3s">
                            <!-- User image -->
                            <img class="img-circle img-sm m" src="./dist/images/event/118.jpg" alt="User Image">

                            <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.
                            </div>
                            <!-- /.comment-text -->
                        </div>
                        <!-- /.box-comment -->
                        <div class="box-comment wow bounceInUp" data-wow-duration="3s">
                            <img class="img-circle img-sm m" src="./dist/images/avatar.png" alt="User Image">
                            <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username ff-->
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.
                            </div>
                        </div><!--end of box-comments-->

                    </div><!--end of box-comments-->

                    <div class="box-footer">
                        <form action="#" method="post">
                            <img class="img-responsive img-circle img-sm"
                                 style="border-radius: 50%; border: 1 solid #fff; "
                                 src="./dist/images/avatar.png"
                                 alt="Alt Text">
                            <!-- .img-push is used to add margin to elements next to floating images -->
                            <div class="img-push">
                                <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                            </div>
                        </form>
                    </div><!--end of box-footer-->

                </div><!--end of box-widget-->

            </div><!--end of col-->

        </div><!--end of container-->
        <div class="container">
            <a href="Articles.html" class="btn btn-info btn-xs col-12">See All</a>
        </div>

    </section><!--end of poster-->

    <section id="Event" class="bg-dark pb-5">
        <h2 class="text-center p-4 text-white">Strategic Mind Events</h2>
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center wow bounce" data-wow-duration="4s">
                <div class="image m-2">
                    <img src="./dist/images/event/112.jpg" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/118.jpg" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/114.jpg" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/115.jpg" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/118.jpg" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/116.jpg" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/212.png" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description</p>
                </div>
                <div class="image m-2">
                    <img src="./dist/images/event/212.png" width="350" height="250" class="p-2 border" alt="this event">
                    <p class="text-white text-center" style="width: 350px">description description description
                        description
                        description
                        description description description</p>
                </div>
            </div><!--end of row-->
        </div><!--end of col-12-->

        <div class="container d-flex justify-content-center align-items-center">
            <a href="" class="btn btn-primary btn-xs col-12 col-sm-12 mt-3 wow bounceIn" data-wow-duration="7s">All
                Event</a>
        </div>

    </section><!--end of event-->

    <section id="footer-newsletter" class="text-white pb-2 p-4" style="background: black">
        <div class="container wow bounceIn" data-wow-duration="3s">
            <h2 class="text-center">OUR message</h2>
            <form action="{{ route('new') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('post') }}
                <div class="form-group">

                <label>Description</label>

                <input name="text" id="text"  type="text" class="form-control" placeholder="Enter description">

                <button id="submit" class="btn btn-info col-md-12" style="margin-top: 15px">Submit</button>

                </div>{{-- end of form group--}}
            </form>{{--end of form--}}
        </div><!--end of container-->
    </section><!--end of section -->

@endsection

@section('script')

    <script>

        $(document).on('click', '#submit', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: "{{ Route('new') }}",
                data: {
                    '_token':         "{{ csrf_token() }}",
                    'text':           $("input[name='text']").val(),
                }, success: function (data) {

                    $('#text').val('');

                }, error: function (data) {

                }/*end of error*/

            });/*end of ajax*/

        });/*end of document*/
        // });
    </script>

@stop
