<section id="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <!--        <div class="text"> funnyText.js</div>-->
        <a id="ali" class="navbar-brand text-white font-weight-bold pl-2" href="/">STRATEGIC MIND</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-auto " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">

                <li class="nav-item">
                    <a class="nav-link active wow bounceInUp" data-wow-duration="6s" href=" /">Home <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-duration="6s" href="#"
                       id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#about">About Us</a>
                        <a class="dropdown-item" href="#Our-Service">Our Service</a>
                        <!--                        <a class="dropdown-item" href="#">Our Customers</a>-->
                        <a class="dropdown-item" href="#Event">Our Event</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s" href="#Article">Public Calender
                        <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-duration="6s" href="#"
                       id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Training Course
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-info">Register
                            Courses</a>
                        <a class="dropdown-item" href="{{ route('AllCourse')}}">All Course</a>
                        <a class="dropdown-item" href="#current-programs">CURRENT PROGRAMS</a>
                        <a class="dropdown-item" href="#">Free Course</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-duration="6s" href="#"
                       id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        knowledge
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Tools</a>
                        <a class="dropdown-item" href="video.html">Video Clies</a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s" href="#footer">contact Us <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s" href="#footer">Profile<span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle wow bounceInLeft row" data-wow-duration="6s" href="#"
                           id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{auth()->user()->image_path}}" class="img-circle" style="width: 50px;"
                                 alt="">
                            <h3 class="text-white mt-2"> {{auth()->user()->name}}</h3>
                        </a>
                        <div class="dropdown-menu mr-auto" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logoute')}}">Logout</a>
                            <a class="dropdown-item" href="{{ route('profile')}}">Profile</a>
                            <a class="dropdown-item" href="{{ route('EditUsers',auth()->user()->id )}}">Edit Users</a>

                             @foreach($classrooms as $classroom)

                             @foreach($Teachers as $Teacher)
                                 @if($classroom->courses_id == $Teacher->courses_id )
                                 <a class="dropdown-item"
                                   href="{{ route('dashboard.classroom.show',$classroom->id)}}">{{ $classroom->course->name }}</a>
                                    @endif
                             @endforeach

                             @foreach($Students as $Student)
                                 @if($classroom->courses_id == $Student->courses_id )
                                     <a class="dropdown-item"
                                        href="{{ route('dashboard.classroom.show',$classroom->id)}}">{{ $classroom->course->name }}</a>
                                 @endif
                             @endforeach

                             @endforeach
                        </div>
                    </li>
                @else
                    <a href="{{ route('login')}}" class="mr-3 btn btn-outline-light wow bounceIn"
                       data-wow-duration="6s"><i
                            class="fa fa-user text"></i> Login</a>
                    <a href="{{ route('register')}}" class="mr-3 btn btn-outline-light wow bounceIn"
                       data-wow-duration="6s"><i
                            class="fa fa-user-plus"></i>
                        Register</a>
                @endauth
            </ul>
        </div><!--navbar-collapse-->
    </nav><!--end of navbar-->

</section> <!--end of banner section-->
