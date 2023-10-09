@extends('dashboard.layouts.main')

@section('container')

<style>
    .badge:hover {
        box-shadow: 1px 1px 3px rgb(85, 22, 22);
    }

    .badge:active {
        opacity: 0.7;
        box-shadow: none;
    }
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">{{session('success')}}</div>
@endif


<div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm " width="700">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col" width="">Title</th>
                <th scope="col" width="150">Category</th>
                <th scope="col" width="150">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)


            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->category->name}}</td>
                <td>
                    <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-info ">
                        <i class="bi bi-eye-fill "> </i>
                    </a>
                    <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning">
                        <i class="bi bi-pencil-square"> </i>
                    </a>
                    <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                class="bi bi-trash3-fill"></i></button>
                    </form>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection