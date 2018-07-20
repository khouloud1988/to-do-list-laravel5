@extends('layouts.master')

@section('content')
<!--Edit task form-->
<form method="POST" action="{{ route('update',['id'=>$task->id])}}" class="col s12">

<div class="row">
    <div class="input-field col s12">
    <input value="{{$task->content}}" id="task2" name="task" type="text" class="validate">
    <label for="task2">Edit Task</label>
    </div>
</div>

@include('partials.coworkers')
<button type="submit"  class="waves-effect waves-light btn">Edit task</button>
@csrf
</form>
@endsection