<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-th"></i><span>dashboard</span></a></li>
            <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-th"></i><span>Users & admin</span></a></li>
            <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>Category Course</span></a></li>
            <li><a href="{{ route('dashboard.course.index') }}"><i class="fa fa-th"></i><span>Course</span></a></li>
            <li><a href="{{ route('dashboard.student.index') }}"><i class="fa fa-th"></i><span>Student</span></a></li>
            <li><a href="{{ route('dashboard.teacher.index') }}"><i class="fa fa-th"></i><span>Teacher</span></a></li>
            <li><a href="{{ route('dashboard.classroom.index') }}"><i class="fa fa-th"></i><span>Class Room</span></a></li>
            <li><a href="{{ route('dashboard.file.index') }}"><i class="fa fa-th"></i><span>File</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">6</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('dashboard.slider.index') }}"><i class="fa fa-circle-o"></i> Slider Image</a></li>
                    <li><a href="{{ route('dashboard.poster.index') }}"><i class="fa fa-circle-o"></i> Add Poster</a></li>
                    <li><a href="{{ route('dashboard.trainer.index') }}"><i class="fa fa-circle-o"></i> Add Trainer</a></li>
                    <li><a href="{{ route('dashboard.calender.index') }}"><i class="fa fa-circle-o"></i> Add Calender</a></li>
                    <li><a href="{{ route('dashboard.event.index') }}"><i class="fa fa-circle-o"></i> Add Event</a></li>
                    <li><a href="{{ route('dashboard.slider.index') }}"><i class="fa fa-circle-o"></i> Mulite Meduy</a></li>
{{--                    <li><a href="{{ route('dashboard.message.index') }}"><i class="fa fa-circle-o"></i> Message</a></li>--}}
                </ul>
            </li>

{{--            @if (auth()->user()->hasPermission('read_users'))--}}
{{--                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>--}}
{{--            @endif--}}

{{--            @if (auth()->user()->hasPermission('read_categories'))--}}
{{--                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>--}}
{{--            @endif--}}

{{--            @if (auth()->user()->hasPermission('read_appointed'))--}}
{{--                <li><a href="{{ route('dashboard.status.index') }}"><i class="fa fa-th"></i><span>@lang('site.status')</span></a></li>--}}
{{--            @endif--}}

{{--            @if (auth()->user()->hasPermission('read_appointed'))--}}
{{--                <li><a href="{{ route('dashboard.guard.index') }}"><i class="fa fa-th"></i><span>@lang('site.guard')</span></a></li>--}}
{{--            @endif--}}

{{--            @if (auth()->user()->hasPermission('read_appointed'))--}}
{{--                <li><a href="{{ route('dashboard.attendee.index') }}"><i class="fa fa-th"></i><span>@lang('site.attendee')</span></a></li>--}}
{{--            @endif--}}

{{--            @if (auth()->user()->hasPermission('read_appointed'))--}}
{{--                <li><a href="{{ route('dashboard.appointed.index') }}"><i class="fa fa-th"></i><span>@lang('site.appointed')</span></a></li>--}}
{{--            @endif--}}

        </ul>

    </section>

</aside>
