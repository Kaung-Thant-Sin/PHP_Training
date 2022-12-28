<!-- resources/views/tasks.blade.php -->
 
@extends('layouts.app')
 
@section('content')
 
    <!-- Bootstrap Boilerplate... -->
 
    <div class="panel-body">
    @if(Session('successAlert'))
                
                    <div class="alert alert-success alert-dismissible show fade">
                    <strong>{{ Session('successAlert')}}</strong>
                    <button class="close" data-dismiss="alert">&times;</button>
                    </div>
                
            @endif
        <!-- Display Validation Errors -->
        @include('common.errors')
 
        <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal" style="width:400px; margin:0 auto;">
            {{ csrf_field() }}
 
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label" style="padding:5px 0px; font-size:19px; font-weight:bold;">Task</label>
 
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" style="margin-bottom: 10px;">
                </div>
            </div>
 
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" style="margin-bottom: 20px; background-color:yellowgreen;">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
 
    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
           
 
            <div class="panel-body">
            
                <table class="table table-striped task-table" style="width:400px; margin:0 auto; border:1px solid;padding:10px">
 
                    <!-- Table Headings -->
                    <thead>
                        <th>Current Task</th>
                        <th>&nbsp;</th>
                    </thead>
 
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
    <!-- Task Name -->
    <td class="table-text col-sm-6">
        <div>{{ $task->name }}</div>
    </td>

    <!-- Delete Button -->
    <td style="display:flex; justify-content:space-between;">
        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger" style="background-color: brown">
                <i class="fa fa-trash"></i> Delete
            </button>
            <input type="hidden" name="_method" value="DELETE"> 
        </form>
         <!-- Edit Button -->
        <form action="{{ url('task/' . $task->id . '/edit') }}" method="GET">
            {{ csrf_field() }}

            <button type="submit" class="btn btn-primary" style="background-color: green">
                <i class="fa fa-edit"></i> Edit
            </button>
            <input type="hidden" name="_method" value="DELETE"> 
        </form>
    </td>
    </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
        
@endsection