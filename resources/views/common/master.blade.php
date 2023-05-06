<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <!-- TITLE -->
    @yield('title')

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-hUXZJLhqDfcCXVhLkj7QoFGLTqUTWjTyNBYqqqob2/Sbb4EtFOIRdtM2kHPtWnIp+IgJZso2xwALl7EGGLgYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLE CSS -->
    <link href="{{ asset('assets/todolist/css/style.css') }}" rel="stylesheet" />

</head>

<body>

<!-- Header Starts -->
<div class="header">

@include('common.navbar')



</div>

<!-- Header ends -->






@yield('content')


<!-- JQUERY JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('assets/todolist/js/main.js') }}"></script>

<script>
    $(document).ready(function() {
  // Get the current URL path
  var currentUrl = window.location.pathname;

  // Set the active class on the corresponding navigation link
  $('nav a[href="'+currentUrl+'"]').parent().addClass('active');
});
</script>


</body>

</html>