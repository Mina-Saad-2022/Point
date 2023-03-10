<title>{{ __('dashboard.admins')}}</title>


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
        </ol>
    </div>


    {{--------------------- to show all admins in project ---------------------}}

    <div class="box">
        <div class="box-header with-border p-2">
            <h3 class="box-title">{{ __('dashboard.admin_table') }}</h3>
        </div>
        <div class="box-header with-border">
            <div class="box-body">
                @if($users->count() == 20)
                    <h3>mina</h3>
                @else
                    <table class="table table-bordered">
                        <thead>
                        <tr class="text-center">
                            <th style="width: 10px">#</th>
                            <th>{{ __('dashboard.first_name') }}</th>
                            <th>{{ __('dashboard.last_name') }}</th>
                            <th>{{ __('dashboard.email') }}</th>
                            <th>{{ __('dashboard.password') }}</th>
                            <th colspan="3">{{ __('dashboard.action') }}</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $admins)
                            <tr>
                                <td class="line_40">{{$admins['id']}}</td>
                                <td class="line_40">{{$admins['first_name']}}</td>
                                <td class="line_40">{{$admins['last_name']}}</td>
                                <td class="line_40">{{$admins['email']}}</td>
                                <td class="pass_admin line_40">{{$admins['password']}}</td>
                                <td>
                                    <a class="text-center" href="{{@route('dashboard.delete_admin', $admins->id)}}">
                                        <form action="{{@route('dashboard.delete_admin')}}" method="post"
                                              class="text-center">
                                            @csrf
                                            <button type="submit"
                                                    class="btn btn-danger btn_action_admin text-center">{{ __('dashboard.delete_admin') }}</button>
                                        </form>
                                    </a>
                                </td>
                                <td>

                                    <a href="{{route('dashboard.edit_admin',$admins->id)}}">
                                        <button type="submit"
                                                class="btn btn-primary btn_action_admin text-center">{{ __('dashboard.edit_admin') }}</button>
                                    </a>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    @endif
@endsection


@include('layouts.dashboard.javascript')


