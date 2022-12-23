<!-- resources/views/tasks.blade.php -->
 
@extends('layouts.app')
 
@section('content')
<form action="{{ url('task/' . $post->id . '/updatequery') }}" method="POST" class="form-horizontal" style="width:400px; height:100px !important; margin:0 auto; border:1px solid; padding:10px">
            {{ csrf_field() }}
 
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label" style="padding:5px 0px; font-size:19px; font-weight:bold;">Task</label>
 
                <div class="col-sm-6">
                    <input type="text" name="name" value="{{ $post->name ?? old }}" id="task-name" class="form-control">
                </div>
            </div>
 
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6" style="margin-top:10px; display:flex; justify-content:space-between;">

                    <a href="{{ url('/')}}" class="btn btn-primary" style="background-color: blueviolet; padding:6px 10px; text-decoration:none; color:black; border:1px solid">Back</a>
                    <button type="submit" class="btn btn-primary" style="background-color: green">
                        <i class="fa fa-file-pen"></i> Update Task
                    </button>
                </div>
            </div>
</form>