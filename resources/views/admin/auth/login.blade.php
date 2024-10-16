@extends('admin.layouts.auth')
@section('title', 'Login')
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Login</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="inputEmail" type="email"
                            placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" class="form-control" id="inputPassword" type="password"
                            placeholder="Password" />
                        <label for="inputPassword">Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-check mb-3">
                        <input name="remember" class="form-check-input" id="inputRememberPassword" type="checkbox"
                            value="true" />
                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
            </div>
        </div>
    </div>
@endsection
