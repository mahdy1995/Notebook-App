@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Notebook</h1>
        <form action="{{route('notebooks.update',$notebook->id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="forum-group">
                <label for="name">
                    Enter new name
                </label>
                <input class="forum-control" name="name" type="text">

            </div>
            <input class="btn btn-primary" type="submit" value="Update">
        </form>
    </div>
@endsection 