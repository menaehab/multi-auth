@extends('admin.layouts.master')
@section('title', 'Create roles')
@section('content')
    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="permissions" class="form-label">Permissions</label>
            <div id="permissions">
                @foreach ($permissions as $permission)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissions[{{ $permission->name }}]"
                            value="on" id="permission-{{ $permission->id }}">
                        <label class="form-check-label" for="permission-{{ $permission->id }}">
                            {{ ucfirst(str_replace('_', ' ', $permission->name)) }}
                        </label>
                    </div>
                @endforeach
                <x-input-error :messages="$errors->get('permissions.*')" class="mt-2" />
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
