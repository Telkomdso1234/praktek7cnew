<!doctype html>
<html lang="en" class="light-theme">

@include('admin.layouts.head')

<body>

  <!--start wrapper-->
  <div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    <!--start content-->
    <main class="page-content">
      @yield('content')
    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    @include('admin.layouts.switcher')

  </div>
  <!--end wrapper-->

  @include('admin.layouts.script')

</body>

</html>