@extends('backend.master')
@section('content')

<div class="container">
    <h1>Create New User</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="form-control" id="role" required>
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
</div>

@endsection