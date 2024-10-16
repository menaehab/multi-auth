@extends('admin.layouts.master')
@section('title', 'Edit roles')
@section('content')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" value="{{ $role->name }}" type="text" class="form-control" id="name"
            placeholder="Enter your name" disabled>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mb-3">
        <label for="permissions" class="form-label">Permissions</label>
        <div id="permissions">
            @foreach ($permissions as $permission)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permissions[{{ $permission->name }}]"
                        value="on" id="permission-{{ $permission->id }}"
                        @if ($role->permissions->contains($permission->id)) checked @endif disabled>
                    <label class="form-check-label" for="permission-{{ $permission->id }}">
                        {{ ucfirst(str_replace('_', ' ', $permission->name)) }}
                    </label>
                </div>
            @endforeach
            <x-input-error :messages="$errors->get('permissions.*')" class="mt-2" />
        </div>
    </div>
@endsection
