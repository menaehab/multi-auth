@extends('admin.layouts.master')
@section('title', 'Users')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (permission(['add_user']))
        <div class="card mb-4">
            <div class="card-body text-end">
                <a href="{{ route('users.create') }}" class="btn btn-success">Add New</a>
            </div>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Users table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (permission(['edit_user']))
                                    <div style="display: inline-block;">
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                    </div>
                                @endif
                                @if (permission(['delete_user']))
                                    <div style="display: inline-block;">
                                        <form method="POST" action="{{ route('users.destroy', $user->id) }}"
                                            style="display:inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
