@extends('layouts.app')
@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            {{$nn}}
        </div>

        <div class="panel-body">
            <!-- Display Validation Errors -->
            <!-- New Task Form -->

            <form action={{$r}} method="post" class="form-horizontal">

                <!-- Task Name -->
                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        @csrf
                        <input type="text" name="name" id="task-name" class="form-control" value="">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    @csrf
                    <div class="col-sm-offset-3 col-sm-6">

                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i> {{$bb}}
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>Created At</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $item)
                            <tr>
                                <td class="table-text"><div>{{$item->name}}</div></td>


                                <td class="table-text"><div>{{$item->created_at}}</div></td>

                                <!-- Task Delete Button -->
                                <td>
                                    <form action="{{route('task.delete',$item->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('task.edit',$item->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-btn fa-info"></i>Edit
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
