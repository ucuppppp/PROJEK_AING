@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success text-decoration-none mb-3 mx-2"><i
                    class="bi bi-arrow-left"></i> Back</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning text-decoration-none mb-3 mx-2"><i
                    class="bi bi-pencil-square"> </i> Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline ">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3 mx-2" onclick="return confirm('Are you sure?')"><i
                        class="bi bi-trash3-fill"></i> Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->category->name}}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}"
                class="img-fluid">
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>


@endsection