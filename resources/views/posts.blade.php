@extends('layouts.main')

@section('container')

<h1 class="mb-5 text-center">{{ $title }}</h1>

<div class="row justify-content-center">
    <div class="col-md-7">
        <form action="/blog">
            @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" autocomplete="off"
                    value="{{request('search')}}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())

<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 400px; overflow: hidden;">
        <img src="{{asset('storage/'.$posts[0]->image)}}" alt="{{$posts[0]->category->name}}" class="img-fluid">
    </div>


    @else

    <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top"
        alt="{{$posts[0]->category->name}}">

    @endif
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}"
                class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
        <p>
            <small class=" text-body-secondary">
                By : <a href="/blog?author={{ $posts[0]->author->username }}"
                    class="text-decoration-none">{{$posts[0]->author->name}}</a> in
                <a href="/blog?category={{ $posts[0]->category->slug }}"
                    class="text-decoration-none">{{$posts[0]->category->name}}</a>
                {{$posts[0]->created_at->diffForHumans()}}
            </small>
        </p>
        <p class="card-text">{{$posts[0]->excerpt}}</p>

        <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none">Read More</a>

    </div>
</div>



<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.5)">
                    <a href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none text-white">{{$post->category->name}}</a>
                </div>
                @if ($post->image)
                <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->category->name}}" class="img-fluid">
                @else

                <img src="https://source.unsplash.com/500x500?{{$post->category->name}}" class="card-img-top"
                    alt="{{$post->category->name}}">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-dark">{{
                            $post->title }}</a></h5>
                    <p>
                        <small class=" text-body-secondary">
                            By : <a href="/blog?author={{ $post->author->username }}"
                                class="text-decoration-none">{{$post->author->name}}</a>
                            {{$posts[0]->created_at->diffForHumans()}}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@else

<p class="text-center fs-4">No Post Found.</p>

@endif
<div class="d-flex justify-content-center">
    {{$posts->links()}}
</div>


@endsection