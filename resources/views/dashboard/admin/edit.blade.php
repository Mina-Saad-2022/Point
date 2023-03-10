<title>{{ __('dashboard.edit')}}</title>


@include('layouts.dashboard.links')

@extends('layouts.dashboard.header')

@include('layouts.dashboard.side_nav')

<!-- /.content-wrapper -->


@section('content')

    <div class="col-sm-6">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{@route('dashboard.view_home_page')}}"> <i
                        class="fal fa-home-lg-alt"></i> {{ __('dashboard.home page') }}   </a></li>
            <li class="breadcrumb-item"><a href="{{@route('dashboard.view_admin_page')}}"> <i
                        class="far fa-user-shield"></i> {{ __('dashboard.admin') }} </a></li>
            <li class="breadcrumb-item"><a href="{{@route('dashboard.view_create_page')}}"> <i
                        class="far fa-user-plus"></i> {{ __('dashboard.create') }}   </a></li>

        </ol>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="page-wrapper  font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card-body">
                <h2 class="title">{{ __('dashboard.create') }}</h2>
                <form method="POST" action="">
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">{{ __('dashboard.first_name') }} :</label>
                                <input class="input--style-4" type="text" name="first_name" value="{{$user->first_name}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">{{ __('dashboard.last_name') }} :</label>
                                <input class="input--style-4" type="text" name="last_name" value="{{$user->last_name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        {{--                            <div class="col-6">--}}
                        {{--                                <div class="input-group">--}}
                        {{--                                    <label class="label">{{ __('dashboard.birthday') }} :</label>--}}
                        {{--                                    <div class="input-group-icon">--}}
                        {{--                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">--}}
                        {{--                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-4">--}}
                        {{--                                <div class="input-group">--}}
                        {{--                                    <label class="label">{{ __('dashboard.gender') }} :</label>--}}
                        {{--                                    <div class="p-t-10">--}}
                        {{--                                        <label class="radio-container m-r-45">{{ __('dashboard.male') }}--}}
                        {{--                                            <input type="radio" checked="checked" name="gender">--}}
                        {{--                                            <span class="checkmark"></span>--}}
                        {{--                                        </label>--}}
                        {{--                                        <label class="radio-container">{{ __('dashboard.female') }}--}}
                        {{--                                            <input type="radio" name="gender">--}}
                        {{--                                            <span class="checkmark"></span>--}}
                        {{--                                        </label>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                    </div>
                    <div class="row row-space">
                        <div class="col-6">
                            <div class="input-group">
                                <label class="label">{{ __('dashboard.email') }} :</label>
                                <input class="input--style-4" type="email" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        {{--                            <div class="col-6">--}}
                        {{--                                <div class="input-group">--}}
                        {{--                                    <label class="label">{{ __('dashboard.phone') }} :</label>--}}
                        {{--                                    <input class="input--style-4" type="text" name="phone">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="p-t-15 col-12 text-center">
                            <button class="btn btn--radius-2 btn--blue col-10  "
                                    type="submit">{{ __('dashboard.add_user') }}</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection



@include('layouts.dashboard.javascript')

