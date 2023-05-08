@extends('common.master')
@section('content')


<div class="padding">
            <div class="col-md-12">
                <div class="card px-3">
                    <div class="card-body">
                        <h4 class="card-title">Name</h4>

                        <form action="{{ route('create_tasks') }}" method="POST">
                            @csrf 

                            <div class="add-items d-flex"> 
                                <input type="text" class="form-control todo-list-input" name="task" id="task" placeholder="What do you need to do today?"> 
                                <input type="text" name="list_id" id="list_id" value="{{ $mainId }}" hidden>
                                <button type="submit" class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button> 
                            </div>
                        </form>
                        
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list">

                            @foreach($tasks as $task)

                                <li>
                                <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox"> {{ $task->task }} <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>

                            @endforeach
                                <li class="completed">
                                    <div class="form-check"> <label class="form-check-label"> <input class="checkbox" type="checkbox" checked=""> For what reason would it be advisable for me to think. <i class="input-helper"></i></label> </div> <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>

@endsection