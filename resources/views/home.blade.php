@extends('layouts.app')

@section('content')
    <div class="w-100">
        <img class="w-100" src="{{ asset('images/ramdai1.jpg') }}">
    </div>



    <div class="container py-4">
        <h1 class="py-4">
            Posts Of Clinics
        </h1>
        <div class="d-md-flex flex-row flex-wrap">
            @foreach ($posts as $post)
                <div class="col-md-12 p-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-md-flex flex-row align-items-center flex-wrap">
                                <img width="45px" height="45px" class="rounded-circle border"
                                    src="{{ $post->user?->image_url }}">
                                <span class="ps-2 fw-bolder">{{ $post->user?->name }} - {{ $post->clinic?->name }}</span>
                                <span class="ms-auto">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="fw-bold" role="title">
                                {{ $post->title }}
                            </div>

                            <span>
                                {{ $post->body }}
                            </span>

                            @if ($post->images->count())
                                <div>
                                    <img class="w-100" src="{{ asset('storage/' . $post->images->first()->image) }}">
                                </div>
                            @endif
                        </div>

                        <div class="card-footer d-flex flex-column">
                            {{-- @if ($post->commentsVisible->count() > 1 || $post->images->count() > 1) --}}
                                <a class="btn btn-primary p-2" href="{{ route('posts.show', compact('post')) }}">
                                    more...
                                </a>
                            {{-- @endif --}}

                            @if ($post->commentsVisible->count())
                                <p class="m-0 mt-1 text-muted">Last Comment</p>
                                <div class="d-md-flex flex-row align-items-center d-flex justify-content-between">
                                    <div>
                                        <img width="45px" height="45px" class="rounded-circle border"
                                            src="{{ $post->commentsVisible->last()?->user?->image_url }}">
                                        <span
                                            class="ps-md-2 fw-bolder">{{ $post->commentsVisible->last()?->user?->name }}</span>
                                    </div>

                                    <span class="text-overflow">
                                        {{ $post->commentsVisible->last()?->comment }}
                                    </span>
                                    <span
                                        class="text-muted text-wrap">{{ $post->commentsVisible->last()?->created_at->diffForHumans() }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
