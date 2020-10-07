@extends('layouts.login')

@section('content')

    <section id="login">

        <div class="bg__login"
             style="background: linear-gradient(rgba(0,0,0, 0.6), rgba(0,0,0, 0.7)), url('{{ asset("./dist/images/mind.jpg")}}') center/cover no-repeat;"></div>

        <div class="container">

            <div class="row">

                <div class="col-10 mx-auto col-md-8 bg-white mx-auto pt-4">
                    <h2 class="fw-300 text-center">Strategic-Mind<span class="text-primary"> Center</span></h2>
                    <hr>

                    <form action="{{ route('register') }}" method="post">
                        <!--Username -->
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        {{--username--}}
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="name"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   value="{{ old('name') }}" id="name" autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!--Email -->
                        <div class="form-group">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" name="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{ old('email') }}" id="email" autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!--password -->
                        <div class="form-group">
                            <label for="password"><i class="fa fa-key"></i>  Password</label>
                            <input type="password" name="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   value="{{ old('password') }}" id="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        {{--Password Confirmation--}}
                        <div class="form-group">
                            <label for="password-confirm">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                   id="password-confirm">
                        </div>

                        <!--                    Login by Remember Me-->

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                                <label for="customCheck1" class="custom-control-label">Remember Me</label>
                            </div>
                        </div>
                        <!--                    Login form-->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <p class="text-center">Already have Account <a href="{{ route("login")}}">Login</a></p>
                        <p class="text-center">Redirect Home Pages <a href="/">home</a></p>
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

                    </form><!--end fo form-->

                </div><!--end of col-auto-->

            </div><!--end of row-->

        </div><!--end of container-->

    </section> <!--end of banner section-->

@endsection
