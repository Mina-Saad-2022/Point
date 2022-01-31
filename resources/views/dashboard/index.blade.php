<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('dashboard.home page')}}</title>

    @include('layouts.dashboard.links')

</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

    @include('layouts.dashboard.header')


    @yield('content')





  </div>
@include('layouts.dashboard.side_nav')

  <!-- /.content-wrapper -->

    @include('layouts.dashboard.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

@include('layouts.dashboard.javascript')
</body>
</html>
