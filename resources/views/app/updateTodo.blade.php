
@extends('app.master')

@section('mainContent')
    <div class="todo_form">

        <form action="{{ route('saveUpdateTodo') }}" method="post" >
            @csrf
            <div class="form-group form-group-lg">
                <input type="hidden" name="id" value="{{ $todo->id }}">
                <input type="text" name="todos" class="form-control updatetodo" value="{{ $todo->todos }}">
                <hr>
            </div>
        </form>

    </div>


@stop