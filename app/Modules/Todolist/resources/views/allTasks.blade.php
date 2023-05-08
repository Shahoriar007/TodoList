@extends('common.master')
@section('content')


<div class="padding">
    <div class="col-md-12">
        <div class="card px-3">
            <div class="card-body">

                @if(!empty($tasks[0]->list_name))
                    <h4 class="card-title text-center font-weight-bold" style="font-size: 24px;">{{$tasks[0]->list_name}}</h4>
                @endif

                <form action="{{ route('create_tasks') }}" method="POST">
                    @csrf

                    <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" name="task" id="task"
                            placeholder="What do you need to do today?">
                        <input type="text" name="list_id" id="list_id" value="{{ $mainId }}" hidden>
                        <button type="submit"
                            class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
                    </div>
                </form>

                <div class="list-wrapper">
                    <ul class="d-flex flex-column-reverse todo-list">

                        @foreach($tasks as $task)

                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox"> {{ $task->task }}
                                    <i class="input-helper"></i>
                                </label>
                            </div>

                            <a href="#" data-toggle="modal" data-target="#edit_{{$task->id}}"><i class="fa fa-edit"></i></a>

                            <!-- Modal -->
                            <div class="modal" id="edit_{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">

                                            <form action="{{ route('edit_task', ['id' => encrypt($task->id)]) }}" method="post">
                                                @csrf
                                                <div class="form-group">

                                                    <label for="Name">Task</label>
                                                    <input type="text" name="task" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        value="{{$task->task}}">

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

                            <form class="remove" id="myForm{{$task->id}}"
                                action="{{ route('dalete_task', ['id' => encrypt($task->id)]) }}" method="POST"
                                class="d-inline">
                                @csrf

                                <a href="#"
                                    onclick="document.getElementById('myForm{{$task->id}}').submit(); return false;"
                                    type="submit">
                                    <i class="mdi mdi-close-circle-outline"></i>
                                </a>

                            </form>

                        </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
$(document).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
        var listItem = $(this).closest('li');
        if ($(this).is(':checked')) {
            listItem.addClass('completed');
        } else {
            listItem.removeClass('completed');
        }
    });
});
</script>
@endsection