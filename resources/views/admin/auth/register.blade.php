@extends('admin.layouts.auth')
@section('title', 'Register')
@section('content')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Create Account</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="name" class="form-control" id="inputName" type="text"
                            placeholder="Enter your last name" />
                        <label for="inputLastName">name</label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="inputEmail" type="email"
                            placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name="password" class="form-control" id="inputPassword" type="password"
                                    placeholder="Create a password" />
                                <label for="inputPassword">Password</label>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name="password_confirmation" class="form-control" id="inputPasswordConfirm"
                                    type="password" placeholder="Confirm password" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
            </div>
        </div>
    </div>
@endsection
