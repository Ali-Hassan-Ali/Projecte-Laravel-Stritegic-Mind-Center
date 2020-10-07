@extends('layouts.app')

@section('title','Class Room')

@section('content')

    <section class="post pt-5 mb-0" style="background: black">
        <div class="container">

            <div class="col-md-12">
                <!-- Box Comment -->
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <div class="user-block">
                            <img class="img-circle" src="{{ $classRoom->teacher->image_path }}" alt="User Image">
                            <span class="username"><a href="#">{{ $classRoom->teacher->full_name }}</a></span>
                            <span class="description">Name Course - {{ $classRoom->course->name }}</span>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <video aria-controls="" style="width: 100%" controls>
                            <source src="{{ asset('./dist/video/video.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer box-comments" style="">

                        <div class="box-comment">

                        @foreach($comments as $comment)
                            @if($comment->class_rooms_id == $classRoom->id)
                                <div class="comment{{ $comment->id }}">
                                    <img class="img-circle img-sm m" src="{{ $comment->image }}"
                                         alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">{{ $comment->name }}
                                            <span class="text-muted pull-right">{{ $comment->created_at }}</span>
                                        </span><!-- /.username -->
                                        {{ $comment->text }}
                                    </div><!-- /.comment-text -->
                                </div><!-- /.class-comment -->
                            @endif
                        @endforeach

                        </div><!-- /.box-comment -->

                    </div><!-- /.box-footer -->

                        <div class="box-footer">
                            <form id="TextForm" action="{{ route('comment.store')}}" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('post') }}

                                <div class="form-group">
                                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="hidden"
                                           placeholder="Press enter to post comment" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="class_rooms_id" value="{{ $classRoom->id }}"
                                           class="form-control input-sm"
                                           placeholder="Press enter to post comment" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="image" value="{{ auth()->user()->image_path }}"
                                           class="form-control input-sm"
                                           placeholder="Press enter to post comment" hidden>
                                </div>
                                <img class="img-responsive img-circle img-sm"
                                     src="{{ auth()->user()->image_path}}"
                                     alt="Alt Text">
                                <!-- .img-push is used to add margin to elements next to floating images -->
                                <div class="img-push">
                                    <input id="text" type="text" name="text" class="form-control input-sm"
                                           placeholder="Press enter to post comment">
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-primary btn-block">submit</button>
                                </div>
                            </form>

                        </div><!-- /.box-footer -->

                    </div><!-- /.box -->
                </div>{{--end of col--}}

            </div>{{--end of container--}}
    </section>

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

@section('script')
    <script>

        $(document).on('click', '#submit', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: "{{ Route('comment.store') }}",
                data: {
                    '_token':         "{{ csrf_token() }}",
                    'name':           $("input[name='name']").val(),
                    'image':          $("input[name='image']").val(),
                    'class_rooms_id': $("input[name='class_rooms_id']").val(),
                    'text':           $("input[name='text']").val(),
                }, success: function (data) {

                    $('#text').val('');

                    $('.box-comment').append(
                        '<div class="comment' + data.id + '">' +
                            '<img class="img-circle img-sm m" src=" ' + data.image + ' ">' +
                            '<div class="comment-text">' +
                                '<span class="username">' + data.name +
                                    '<span class="text-muted pull-right">' + data.created_at + '</span>' +
                                '</span>' +
                                '<span>' + data.text + '</span>' +
                            '</div>' +
                        '</div>'
                    );/*end of success*/

                }, error: function (data) {

                }/*end of error*/

            });/*end of ajax*/

        });/*end of document*/
        // });
    </script>
@stop
