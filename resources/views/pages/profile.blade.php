@extends('layouts.app')

@section('content')

    @include('layouts.include._banner')

    <div class="modal modal-info fade" id="modal-info">>
        <div class="col-12">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center font-weight-bold">Register Course</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <label>images</label>
                    <div class="form-group">
                        <input type="file">
                    </div>
                    <label>Number ID</label>
                    <div class="form-group">
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>Select Course</label>
                        <select class="form-control">
                            <option>Course 1</option>
                            <option>Course 2</option>
                            <option>Course 3</option>
                            <option>Course 4</option>
                            <option>Course 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control">
                            <option>Online Course</option>
                            <option>No Online Course</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" placeholder="enter Age">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i> Submit</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal modal-info fade" id="modal-Trainer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center font-weight-bold">Register Course</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <label>images</label>
                    <div class="form-group">
                        <input type="file">
                    </div>
                    <label>Number ID</label>
                    <div class="form-group">
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label>Select Course</label>
                        <select class="form-control">
                            <option>Course 1</option>
                            <option>Course 2</option>
                            <option>Course 3</option>
                            <option>Course 4</option>
                            <option>Course 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control">
                            <option>Online Course</option>
                            <option>No Online Course</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" placeholder="enter Age">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary"><i class="fa fa-plus"></i> Submit</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal modal-info fade" id="modal-Users">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center font-weight-bold">Register Users</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="box-body">
                    <form action="{{ route('users.update',auth()->user()->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}">
                        </div>

                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ auth()->user()->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                        </div>

                    </form><!-- end of form -->
                </div>{{--end of --}}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h2 class="card-title text-black mb-0 text-center">Social Profile</h2>
                        </div>
                        <div class="card-body">
                            <div class="xp-social-profile">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center justify-content-center text-center">
                                            <img src="{{ auth()->user()->image_path }}"
                                                 alt="user-profile"
                                                 class="rounded-circle img-fluid">
                                        </div><!--align-items-center-->
                                    </div><!--end row-->
                                </div><!--end row-->

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="my-1 text-black">Name : {{ auth()->user()->name }}Hassan</h5>
                                        <p class="mb-3 text-muted">Email: {{ auth()->user()->email }}</p>
                                        <p class="text-muted">Lifestyle coach and photographer <br>delivering best
                                            images only...</p>
                                    </div><!--end col-12-->
                                </div><!--end row-->

                                <div class="row text-center">

                                    <div class="col-4 pt-3">
                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                           data-target="#modal-info">Register
                                            Courses</a>
                                    </div><!--end col-4-->

                                    <div class="col-4 pt-3">
                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                           data-target="#modal-Trainer">Register
                                            Trainer</a>
                                    </div><!--end col-4-->

                                    <div class="col-4 pt-3">
                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                           data-target="#modal-Users">Edit Users</a>
                                    </div><!--end col-4-->

                                </div><!--end row-->

                            </div><!--end card-body-->

                        </div><!--end card-->

                    </div><!--end col-md-12-->
                </div><!--end row-->
            </div>{{--end of row--}}
        </div><!--end container-->

    </section><!--end section profile-->

    <footer id="table-book" class="bg-light pt-0 p-4 pb-0">

        <h2 class="text-center pb-4">BOOK TEACHER</h2>

        <div class="container">

            <div class="row">
                <div class="col-12">

                    <div class="box-body table-responsive no-padding">
                        @if ($files->count() > 0)
                            <table class="table table-hover" id="table">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name-Teacher</th>
                                    <th>Name-Book</th>
                                    <th>Action</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($files as $index=>$file)
                                    <tr>
                                        @if($file->courses_id == $classRoom->courses_id)
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $file->teacher->full_name }}</td>
                                            <td>{{ $file->name_book }}</td>
                                            <td><a href="{{ route('dashboard.file.edit', $file->id) }}"
                                                   class="btn btn-info btn-sm"><i
                                                        class="fa fa-download"></i></a>
                                                <form action="{{ route('dashboard.file.destroy', $file->id) }}"
                                                      method="post" style="display: inline-block">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-info delete btn-sm"><i
                                                            class="fa fa-eye"></i></button>
                                                </form><!-- end of form -->
                                            </td>
                                            <td>{{ $file->created_at }}</td>
                                            <td>{{ $file->description }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody><!-- end of table  body-->
                            </table><!-- end of table -->
                        @endif
                    </div><!-- /.box-body -->

                </div><!--end of col-12-->

            </div><!--end of row-->

        </div><!--end of container-->

    </footer>   <!--end of footer-->

@endsection
