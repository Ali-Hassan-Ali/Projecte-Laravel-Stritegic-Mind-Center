@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Class Room</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i>dashboard</a></li>
                <li><a href="{{ route('dashboard.classroom.index') }}">Class Room Course</a></li>
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
                    <form action="{{ route('dashboard.file.update',$file->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>Teacher</label>
                            <select name="teachers_id" class="form-control">
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ old('teachers_id') == $teacher->id ? 'selected' : '' }}>{{ $teacher->full_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>name_book</label>
                            <input type="text" name="name_book" class="form-control" value="{{ $file->name_book }}">
                        </div>

                        <div class="form-group">
                            <label>file</label>
                            <input type="file" name="file" class="form-control" value="{{ $file->file }}">
                        </div>

                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="description" class="form-control" value="{{ $file->description }}">
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <select name="courses_id" class="form-control">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" {{ old('courses_id') == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
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
