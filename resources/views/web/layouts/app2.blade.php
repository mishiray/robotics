<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
      <meta name="description"
      content="AIROL is passionate about creating value and long term impact within the AI and ML space in Africa." />
  
      <!--title-->
      <title>@yield('title') :: AIROL</title>

      <!-- fevicon -->
      <link rel="icon" href="{{ $web_source }}/assets/logos/logo.png" type="image/gif" />

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
      <div class="loader">
         <div class="loading-animation"></div>
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


        <a href="#" class="btn back-to-top btn-primary btn-round" data-smooth-scroll data-aos="fade-up"
        data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
        <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/navigation/arrow-up.svg" alt="arrow-up icon" data-inject-svg />
      </a>
        <!-- Javascript files-->
        @include('web.includes.script')
   </body>
</html>