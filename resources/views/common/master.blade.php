<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <!-- TITLE -->
    @yield('title')

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

@yield('js')


</body>

</html>