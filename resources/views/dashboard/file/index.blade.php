@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>File</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">File</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">File <small>{{ $files->count() }}</small></h3>

                    <form action="{{ route('dashboard.file.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>

                                <a href="{{ route('dashboard.file.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>add</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($files->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>Name Book</th>
                                <th>Description</th>
                                <th>file</th>
                                <th>Course name</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($files as $index=>$file)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $file->teacher->full_name }}</td>
                                    <td>{{ $file->name_book }}</td>
                                    <td>{{ $file->description }}</td>
                                    <td>{{ $file->file }}</td>
                                    <td>{{ $file->course->name }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.file.edit', $file->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                        <form action="{{ route('dashboard.file.destroy', $file->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                        </form><!-- end of form -->

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

                        {{ $files->appends(request()->query())->links() }}

                    @else

                        <h2>no data found</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
