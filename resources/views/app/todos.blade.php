@extends('app.master')


@section('mainContent')
    @if( Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="todo_form">
        <form action="{{ route('saveTodo') }}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" name="todos" class="form-control" placeholder="Enter Your Todos">
            </div>

        </form>
    </div>


    @foreach($todos as $todo)
        <div class="list_todo">
            {{ $todo->todos }}
            <a href="{{ url('/delete/todo/'.$todo->id) }}" class="btn btn-danger btn-sm" title="Delete Tasks"> X</a>
            <a href="{{ url('/update/todo/'.$todo->id) }}" class="btn btn-warning btn-sm"  title="Update Tasks">update</a>
            @if($todo->status===0)
                <a href="{{ url('/completed/todo/'.$todo->id) }}"> Mark as Completed</a>
            @else
                     Completed
            @endif
        </div>
        <hr>

    @endforeach
@stop