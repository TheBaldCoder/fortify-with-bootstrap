@extends('authentication.layouts.authlayout')

@section('content')
    <div>
        <div class="mb-5">
            <h1>Login</h1>
        </div>

        <!-- Form -->
        <div class="mb-5">
            <form action="/login" method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input value="{old('email')}" type="email" id="email" name="email" class="form-control" required
                        autocomplete="username">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required
                        autocomplete="current-password">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <!-- Premade users details -->
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading mb-3">Premade Users:</h4>
            <span>Name: user1</span> <br />
            <span>Email: user1@user.com</span> <br />
            <span>Password: password</span>
            <hr>
            <span>Name: user2</span> <br />
            <span>Email: user2@user.com</span> <br />
            <span>Password: password</span>
            <hr>
            <span>Name: user3</span> <br />
            <span>Email: user3@user.com</span> <br />
            <span>Password: password</span>
        </div>
    </div>
@endsection
