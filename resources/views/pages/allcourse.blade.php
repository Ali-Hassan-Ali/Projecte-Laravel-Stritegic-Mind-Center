@extends('layouts.app')

@section('title','Class Room')

@section('content')

    @include('layouts.include._banner')

    <section id="All-Course">
        <h2 class="text-center pt-3">All Course</h2>
        @foreach($Categorys as $Category)
            <div class="text-center min-course text-white">
                {{ $Category->name }}
            </div><!--end of container-->
            @foreach($courses as $course)
                @if($Category->id == $course->category_id)
                    <div class="page-dev">
                        <h4 class="text-center p-2 mb-0">{{ $course->name }}</h4>
                    </div><!--end of pages-dev-->
                @endif
            @endforeach
        @endforeach
    </section><!--end of section course-->

@endsection
