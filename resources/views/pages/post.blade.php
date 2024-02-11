@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="py-4">
            <div class="d-md-flex flex-row justify-content-between">

                <div class="fw-bold" role="title">
                    {{ $post->title }}
                </div>

                <a href="{{ route('home') }}">Go Home</a>
            </div>
        </h1>
        <div class="d-md-flex flex-row flex-wrap">
            <div class="col-md-12 py-3">
                <div class="card">
                    <div class="card-header">
                        <div class="d-md-flex flex-row align-items-center flex-wrap">
                            <img width="45px" height="45px" class="rounded-circle border" src="{{ $post->user?->image_url }}">
                            <span class="ps-2 fw-bolder">{{ $post->user?->name }} - {{ $post->clinic?->name }}</span>
                            <span class="ms-auto">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="d-md-flex flex-row">

                            <div class="fw-bold" role="title">
                                {{ $post->title }}
                            </div>
                        </div>

                        <span>
                            {{ $post->body }}
                        </span>

                        @if ($post->images->count())
                            <div class="d-md-flex flex-row flex-wrap">
                                @foreach ($post->images as $image)
                                    <div class="col-md-6 p-1">
                                        <img class="w-100 border border-1 rounded"
                                            src="{{ asset('storage/' . $image->image) }}">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="card-footer d-flex flex-column">
                        @if ($post->commentsVisible->count())
                            <p class="m-0 mt-1 text-muted">All Comments</p>

                            @foreach ($post->commentsVisible as $comment)
                                <div class="d-md-flex flex-row align-items-center d-flex py-1 border-top">
                                    <div>
                                        <img width="45px" height="45px" class="rounded-circle border"
                                            src="{{ $comment?->user?->image_url }}">
                                        <span class="ps-md-2 fw-bolder">{{ $comment?->user?->name }}</span>
                                    </div>

                                    <span class="text-overflow ms-2">
                                        {{ $comment?->comment }}
                                    </span>
                                    <span
                                        class="ms-auto text-muted text-wrap">{{ $comment?->created_at->diffForHumans() }}</span>
                                </div>
                            @endforeach
                        @endif

                        @auth
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="d-md-flex flex-row py-1 align-items-center border-top w-100">
                                <div class="pe-1">
                                    <img width="45px" height="45px" class="rounded-circle border"
                                        src="{{ auth()->user()->image_url }}">
                                    <span class="ps-md-2 fw-bolder">{{ auth()->user()->name }} </span>
                                </div>

                                <form action="{{ route('posts.comment', compact('post')) }}" method="post"
                                    class="row flex-grow-1">
                                    @csrf
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="comment" placeholder="comment"
                                            value="{{ old('comment') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary w-100">Send</button>
                                    </div>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
