@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>ClassRoom</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">Class Room</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Class Room <small>{{ $classrooms->count() }}</small></h3>

                    <form action="{{ route('dashboard.classroom.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder=" search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>

                                <a href="{{ route('dashboard.classroom.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>add</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($classrooms->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Teacher</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($classrooms as $index=>$classroom)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $classroom->course->name }}</td>
                                    <td>{{ $classroom->teacher->full_name }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.classroom.edit', $classroom->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                        <form action="{{ route('dashboard.classroom.destroy', $classroom->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                        </form><!-- end of form -->

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

                        {{ $classrooms->appends(request()->query())->links() }}

                    @else

                        <h2>no data found</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
