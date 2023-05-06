@extends('common.master')
@section('content')

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

@endsection