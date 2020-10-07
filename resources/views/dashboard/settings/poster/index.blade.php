@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Poster</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Poster</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Poster<small>{{ $posters->count() }}</small></h3>

                    <form action="{{ route('dashboard.poster.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>
                                    <a href="{{ route('dashboard.poster.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> add</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($posters->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($posters as $index=>$poster)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ $poster->image_path }}" alt="this image" width="50"></td>
                                    <td>{{ $poster->status }}</td>
                                    <td>
                                            <a href="{{ route('dashboard.poster.edit', $poster->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                            <form action="{{ route('dashboard.poster.destroy', $poster->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                            </form><!-- end of form -->
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

{{--                        {{ $categories->appends(request()->query())->links() }}--}}

                    @else

                        <h2>No Data Found</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
