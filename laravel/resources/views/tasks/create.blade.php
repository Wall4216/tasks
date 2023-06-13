@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div style="background-color: rgba(220, 220, 220, 0.8); padding: 20px; margin: auto;">
            <h1>Create Task</h1>

            <form action="{{ route('tasks.store') }}" method="POST" style="width: 300px;">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
