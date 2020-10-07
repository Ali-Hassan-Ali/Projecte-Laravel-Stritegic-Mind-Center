@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Teacher</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">Teacher</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Teachers <small>{{ $teachers->count() }}</small></h3>

                    <form action="{{ route('dashboard.teacher.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>

                                <a href="{{ route('dashboard.teacher.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>add</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($teachers->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>image</th>
                                <th>course</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($teachers as $index=>$teacher)

                                <tr>

                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $teacher->full_name }}</td>
                                    <td><img src="{{ $teacher->image_path }}" alt="" width="40"></td>
                                    <td>{{ $teacher->course->name }}</td>
                                  <td>
                                        <a href="{{ route('dashboard.teacher.edit', $teacher->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                        <form action="{{ route('dashboard.teacher.destroy', $teacher->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                        </form><!-- end of form -->

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

{{--                        {{ $teachers->appends(request()->query())->links() }}--}}

                    @else

                        <h2>no data found</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
