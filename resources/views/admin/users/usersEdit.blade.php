@extends('admin.layouts.master')
@section('title', 'Edit User')
@section('content')
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}"
                placeholder="Enter your name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
