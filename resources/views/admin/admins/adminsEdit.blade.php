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
            <select class="form-select" id="role" name="role">
                <option selected disabled>Select your role</option>
                @foreach ($roles as $role)
                    <option @if ($admin->roles->contains($role->id)) selected @endif value="{{ $role->id }}">
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
