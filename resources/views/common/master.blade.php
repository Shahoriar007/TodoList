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

<!-- Navbar Starts -->
<nav class="navbar navbar-expand-custom navbar-mainbg">
  <a class="navbar-brand navbar-logo" href="#">TodoList</a>
  <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <div class="hori-selector">
        <div class="left"></div>
        <div class="right"></div>
      </div>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>All Lists</a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- Navbar Ends -->

</div>

<!-- Header ends -->

<!-- List's list starts-->
<div class="text-right">
<button type="button" class="btn btn-addList float-right">Add New</button>
</div>

<!-- List's list ends-->

<div class="container">
  <div class="row">
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">

        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <!-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> -->
            <ul class="list-unstyled mt-3 mb-4">
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>

      </div>
      <div class="col">

        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Free <a href="">Trash</a></h4>

          </div>
          <div class="card-body">
            <!-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> -->
            <ul class="list-unstyled mt-3 mb-4">
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">View Details</button>
          </div>
        </div>
        
      </div>
      <div class="col">

        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <!-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> -->
            <ul class="list-unstyled mt-3 mb-4">
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
        
      </div>
    </div>

    
  </main>
  </div>
</div>




@yield('content')


<!-- JQUERY JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('assets/todolist/js/main.js') }}"></script>


</body>

</html>