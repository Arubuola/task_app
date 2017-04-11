@extends('layouts.parent')
<!--Content to serve-->
@section('killer')
<div class="jumbotron" style="background: azure">
    The awesome husker's task app
    <br>
    <a href="{{route('add_task.create')}}" class="text-white"> <button class="btn btn-success">Add New Task!</button></a>
</div>


@endsection