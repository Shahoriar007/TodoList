@extends('common.master')
@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <h1>Welcome to TodoList</h1>
    
    <a class="btn btn-outline-dark mx-4" href="{{ route('all_lists') }}">
  View all list
  <i class="fa fa-angle-right"></i>
</a>
</div>
@endsection
