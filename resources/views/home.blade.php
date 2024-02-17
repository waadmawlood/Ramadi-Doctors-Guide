@extends('layouts.app')

@section('content')
    <div class="container-fluid px-0">
        <img class="w-100" src="{{ asset('images/ramdai1.jpg') }}" alt="Banner">
    </div>

    {{-- All Posts of Clinic --}}
    <div class="container py-4">
        <h3 class="mb-4 pb-2 border-bottom"><i class="bi bi-heart-pulse-fill"></i> Clinics Posts</h3>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <a class="text-decoration-none" href="{{ route('clinics.show', ['clinic' => $post->clinic_id]) }}">
                            <div class="card-header d-flex align-items-center">
                                <img width="45px" height="45px" class="rounded-circle me-2 border"
                                    src="{{ $post->user?->image_url }}" alt="User Image">
                                <div>
                                    <span class="fw-bold">{{ $post->user?->name }} - {{ $post->clinic?->name }}</span>
                                </div>
                                <div class="ms-auto text-muted">
                                    <span>{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->body }}</p>
                            @if ($post->images->count())
                                <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->images->first()->image) }}"
                                    alt="Post Image">
                            @endif
                        </div>
                        <div class="card-body border-top">
                            <a href="{{ route('posts.show', compact('post')) }}" class="btn btn-primary">Read more</a>
                            @if ($post->commentsVisible->count())
                                <div class="mt-3">
                                    <p class="m-0 text-muted">Last Comment</p>
                                    <div class="p-1 rounded border" style="background-color: #F1F3F5">
                                        <div class="d-flex align-items-center">
                                            <img width="30px" height="30px" class="rounded-circle me-2 border"
                                                src="{{ $post->commentsVisible->last()?->user?->image_url }}"
                                                alt="Commenter Image">

                                            <div class="d-flex flex-column w-100">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="fw-bold">
                                                        {{ $post->commentsVisible->last()?->user?->name }}
                                                    </div>
                                                    <div class="text-muted">
                                                        {{ $post->commentsVisible->last()?->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                                <div>
                                                    <span
                                                        class="ms-2">{{ $post->commentsVisible->last()?->comment }}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
