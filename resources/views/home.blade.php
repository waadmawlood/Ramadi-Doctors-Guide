@extends('layouts.app')

@section('content')
<div class="w-100">
<img class="w-100" src="{{ asset('images/ramdai1.jpg') }}">
</div>



<div class="container py-4">
    <div class="py-4">
        Posts Of Clinics
    </div>
    <div class="d-md-flex flex-row flex-wrap">
        @foreach ($posts as $post)
        <div class="col-md-6 p-1">
            <div class="card">
                <div class="card-header">
                    <div class="d-md-flex flex-row align-items-center flex-wrap">
                        <img width="45px" height="45px" class="rounded-circle" src="{{ $post->user?->image_url }}">
                        <span class="ps-2">{{ $post->user?->name }} - {{ $post->clinic?->name }}</span>
                    </div>
                </div>

                <div class="card-body">

                    <div class="alert alert-success" role="alert">

                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
