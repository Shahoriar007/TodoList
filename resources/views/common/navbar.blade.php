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
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i>Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('all_lists') }}"><i class="far fa-address-book"></i>All Lists</a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- Navbar Ends -->

