@extends('common.master')
@section('content')

<!-- List's list starts-->

<button type="button" class="btn btn-addList" data-toggle="modal" data-target="#exampleModal">
    Add New
</button>

<!-- List's list ends-->

<div class="container">
    <div class="row">
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

                @foreach($lists as $list)

                <div class="col">

                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $list->name }}</h4>
                        </div>

                        <div class="card-footer">


                            <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#edit_{{$list->id}}">
                                <i class="fa fa-edit"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal" id="edit_{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">

                                            <form action="{{ route('edit_list', ['id' => encrypt($list->id)]) }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="Name">List Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        value="{{$list->name}}">
                                                    @error('name')
                                                    <div class="invalid-feedback mt-1 mb-1">{{ $message }}</div>
                                                    @enderror

                                                </div>

                                                <button type="submit" class="btn btn-addList">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>




                            <form action="{{ route('dalete_list', ['id' => encrypt($list->id)]) }}" method="POST"
                                class="d-inline">
                                @csrf

                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Are you sure you want to delete this list?')">
                                    <i class="fa fa-close"></i>
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                            <!-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1> -->
                            <ul class="list-unstyled mt-3 mb-4">

                            </ul>
                            <a  href="{{ route('all_tasks', ['id' => encrypt($list->id)]) }}" class="w-100 btn btn-lg btn-outline-primary">View Details</a>
                        </div>
                    </div>

                </div>

                @endforeach


            </div>

            <!-- Pagination links -->
      <div class="d-flex justify-content-center">
        {!! $lists->links() !!}
      </div>


        </main>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <form action="{{ route('create_lists') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Name">New List Name</label>
                        <input type="name" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Name">
                        @error('name')
                        <div class="invalid-feedback mt-1 mb-1">{{ $message }}</div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-addList">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <form action="{{ route('create_lists') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Name">List Name</label>
                        <input type="name" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="{{$lists}}">
                        @error('name')
                        <div class="invalid-feedback mt-1 mb-1">{{ $message }}</div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-addList">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

@endsection