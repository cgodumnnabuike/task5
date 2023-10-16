@extends('layouts.app')

@section('title', 'Create Member')

@section('content')
    <h1>Create Member</h1>
    <form method="POST" action="{{ route('members.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="school">School:</label>
            <select name="school" id="school" class="form-control" required>
                <option value="School 1">Kirklees College</option>
                <option value="School 2">Greenhead College</option>
                <option value="School 3">King College London</option>
                <!-- Add more school options as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Member</button>
    </form>
@endsection


