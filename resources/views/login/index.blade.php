@extends('layouts.main')

@section('container')

<head>
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto ">

            <img class="mb-2 mx-auto d-flex align-item-center" src="/img/logosmk.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal d-block text-center">LOGIN</h1>

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid
                    @enderror" id="email" placeholder="name@example.com " autofocus required value="{{old('email')}}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>


            </form>
            <small class="d-block text-center">Dont have a Account?<a href="/register"> Register</a></small>
            <p class="mt-4 mb-3 text-body-secondary text-center">&copy; 2023-2024</p>
        </main>
    </div>
</div>

@endsection