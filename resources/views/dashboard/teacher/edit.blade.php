@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Teacher</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i>dashboard</a></li>
                <li><a href="{{ route('dashboard.teacher.index') }}">Teacher</a></li>
                <li class="active"> Edit</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title"> Edit</h3>
                </div><!-- end of box header -->
                <div class="box-body">
                    @include('partials._errors')
                    <form action="{{ route('dashboard.teacher.update', $teacher->id) }}" method="post"
                          enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>full-name</label>
                            <input type="text" name="full_name" class="form-control" value="{{ $teacher->full_name }}">
                        </div>

                        <div class="form-group">
                            <label>age</label>
                            <input type="number" name="age" class="form-control" value="{{ $teacher->age }}">
                        </div>

                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ $teacher->image_path }}" style="width: 100px"
                                 class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="description" class="form-control"
                                   value="{{ $teacher->description }}">
                        </div>

                        <div class="form-group">
                            <label>collage</label>
                            <input type="text" name="collage" class="form-control" value="{{ $teacher->collage }}">
                        </div>

                        <div class="form-group">
                            <label>User id</label>
                            <select name="users_id" class="form-control">
                                @foreach ($users as $user)
                                    <option
                                        value="{{ $user->id }}" {{ old('email') == $user->email ? 'selected' : '' }}>
                                        {{ $user->email }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Course</label>
                            <select name="courses_id" class="form-control">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> add</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
