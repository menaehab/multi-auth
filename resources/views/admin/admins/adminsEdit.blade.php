@extends('admin.layouts.master')
@section('title', 'Edit Admin')
@section('content')
    <form method="POST" action="{{ route('admins.update', $admin->id) }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $admin->name }}" id="name"
                placeholder="Enter your name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
