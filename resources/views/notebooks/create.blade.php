@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Create Notebook</h1>
        <form action="/notebooks" method="POST">
            {{ csrf_field() }}
            <div class="forum-group">
                <label for="name">
                    Enter Name
                </label>
                <input class="forum-control" name="name" type="text">

            </div>
            <input class="btn btn-primary" type="submit" value="Done">
        </form>
    </div>
@endsection 