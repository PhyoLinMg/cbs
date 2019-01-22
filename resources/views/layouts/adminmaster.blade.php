<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  @yield("title")
  <!-- plugins:css -->

   <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
  
  
 
  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />



</head>

<body style="background-image: url("https://www.crowdspring.com/blog/wp-content/uploads/2009/11/2616906744_a238697a95_b.jpg");">

  @yield("content")
  <!-- plugins:js -->
  <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>


 <!--  <script src=" {{ asset('js/bootstrap.min.js')}} "></script> -->

  <script src="{{asset('js/app.js')}}"></script>

  
 

  <script src="{{ asset('js/plugins.js') }}"></script>

  <script src="{{ asset('js/all.js') }}"></script>

  
  <!-- endinject -->
  

  @yield("script")
  @stack('scripts')

</body>

</html>