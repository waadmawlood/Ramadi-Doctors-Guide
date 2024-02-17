@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="py-4">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="fw-bold" role="title">
                    {{ $post->title }}
                </div>
                <a href="{{ route('home') }}" class="text-decoration-none">Go Home</a>
            </div>
        </h1>
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="card">
                    <div class="card-header">
                        <a class="text-decoration-none" href="{{ route('clinics.show', ['clinic' => $post->clinic_id]) }}">
                        <div class="d-md-flex align-items-center">
                            <img width="45px" height="45px" class="rounded-circle border me-2"
                                src="{{ $post->user?->image_url }}" alt="User Image">
                            <div>
                                <span class="fw-bold">{{ $post->user?->name }} - {{ $post->clinic?->name }}</span>
                            </div>
                            <div class="ms-auto">
                                <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->body }}</p>
                        @if ($post->images->count())
                            <div class="row row-cols-1 row-cols-md-2 g-3">
                                @foreach ($post->images as $image)
                                    <div class="col">
                                        <img class="img-fluid rounded border" src="{{ asset('storage/' . $image->image) }}"
                                            alt="Post Image">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="card-footer">
                        @if ($post->commentsVisible->count())
                            <p class="m-0 my-1 text-muted">All Comments</p>
                            @foreach ($post->commentsVisible as $comment)
                                <div class="d-flex border-top py-2">
                                    <img width="45px" height="45px" class="rounded-circle border me-3"
                                        src="{{ $comment->user->image_url }}" alt="Commenter Image">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fw-bold me-3">{{ $comment->user->name }}</span>
                                            <span class="text-muted badge border">{{ $comment->created_at->diffForHumans() }}</span>
                                        </div>
                                        <p class="mb-0">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @auth
                            <form action="{{ route('posts.comment', compact('post')) }}" method="post" class="mt-2">
                                @csrf
                                <div class="d-flex align-items-center border-top py-2">
                                    <img width="45px" height="45px" class="rounded-circle border me-2"
                                        src="{{ auth()->user()->image_url }}" alt="User Image">
                                    <input type="text" class="form-control me-2" name="comment" placeholder="Comment"
                                        value="{{ old('comment') }}">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul class="m-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
