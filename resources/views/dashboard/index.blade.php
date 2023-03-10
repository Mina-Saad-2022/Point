

<title>{{ __('dashboard.home page')}}</title>



@include('layouts.dashboard.links')

@extends('layouts.dashboard.header')

@include('layouts.dashboard.side_nav')

  <!-- /.content-wrapper -->


 @section('content')

     <div class="col-sm-6">
         <ol class="breadcrumb ">
             <li class="breadcrumb-item"> <a href="{{@route('dashboard.view_home_page')}}"> <i class="fal fa-home-lg-alt"></i> {{ __('dashboard.home page') }}   </a> </li>
         </ol>
     </div>


 @endsection

 @include('layouts.dashboard.javascript')



