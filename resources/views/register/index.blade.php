@extends('layouts.main')

@section('container')

<head>
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-register w-100 m-auto">
            <img class="mb-2 mx-auto d-flex align-item-center" src="/img/logosmk.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal d-block text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                        id="name" placeholder="Name" required value="{{ old('name')}}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                        id="username" placeholder="Username" required value="{{ old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Email" required value="{{ old('email')}}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password"
                        class="form-control rounded-bottom mb-3 @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                {{-- <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom mb-3" id="password"
                        placeholder="Password">
                    <label for="password">Confirm Password</label>
                </div> --}}
                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center">Allready Have Account?<a href="/login"> Login</a></small>
            <p class="mt-4 mb-2 text-body-secondary d-block text-center">&copy; 2023-2024</p>

        </main>
    </div>
</div>


@endsection