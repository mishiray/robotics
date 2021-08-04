<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <!--title-->
      <title>@yield('title') :: Robotics Lab</title>

      <!-- fevicon -->
      <link rel="icon" href="{{ $web_source }}/assets/img/airol_2.png" />

      <!-- site metas -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- css FIles-->
      @include('web.includes.style')

   </head>
   <!-- body -->
   <body class="main-layout">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="{{$web_source}}/images/loading.gif" alt="#"/></div>
        </div>
        <!-- end loader -->
        <!-- top -->
        <!-- header -->
        @include('web.includes.header')
        <!-- end header -->
        <!-- content goes here -->
        @yield('content')
        <!-- content ends here -->
        <!--  footer -->
        @include('web.includes.footer')
        <!-- end footer -->

        <!-- Javascript files-->
        @include('web.includes.script')
   </body>
</html>