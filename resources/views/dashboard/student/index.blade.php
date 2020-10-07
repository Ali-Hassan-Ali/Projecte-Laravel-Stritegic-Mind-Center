@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Student</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">Student</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Student <small>{{ $students->count() }}</small></h3>

                    <form action="{{ route('dashboard.student.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>

                                <a href="{{ route('dashboard.student.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>add</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($students->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>full-name</th>
                                <th>image</th>
                                <th>Collage</th>
                                <th>Courses Name</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach ($students as $index=>$student)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $student->full_name }}</td>
                                    <td><img src="{{ $student->image_path }}" style="width: 100px;" class="img-thumbnail" alt=""></td>
                                    <td>{{ $student->collage }}</td>
                                    <td>{{ $student->course->name }}</td>
{{--                                    <td>{{ $student->course->name }}</td>--}}
                                    <td>
                                        <a href="{{ route('dashboard.student.edit', $student->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                        <form action="{{ route('dashboard.student.destroy', $student->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                        </form><!-- end of form -->
                                        <a href="{{ route('dashboard.student.show', $student->id) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> show</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

                    @else

                        <h2>no data found</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
