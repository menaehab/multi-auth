@extends('admin.layouts.master')
@section('title', 'Roles')
@section('content')
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role">
                <option selected>Select your role</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="subscriber">Subscriber</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>

        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
