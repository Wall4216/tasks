@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="bg-dark p-4 rounded shadow-lg" style="max-width: 400px; margin: 0 auto;">
            <h1 class="text-white text-center mb-4">Create Task</h1>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label text-white">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-white">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="due_date" class="form-label text-white">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>
                <button type="submit" class="btn btn-danger btn-lg btn-block">Create</button>
            </form>
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-control {
            background-color: #2b3949;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
        }
    </style>
@endsection
