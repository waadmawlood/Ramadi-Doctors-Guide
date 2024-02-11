@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="py-4">
            <div class="d-md-flex flex-row justify-content-between">

                <div class="fw-bold" role="title">
                    {{ $clinic->name }}
                </div>

                <a href="{{ route('clinics') }}">Go Clinics</a>
            </div>
        </h1>
        <div class="d-md-flex flex-row flex-wrap">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-md-flex flex-row align-items-center flex-wrap">
                            <img width="45px" height="45px" class="rounded-circle border" src="{{ $clinic->logo_url }}">
                            <span class="ps-2 fw-bolder">{{ $clinic->name }}</span>
                            <span class="ms-auto text-warning">
                                @for ($i = 1; $i <= $clinic->rate; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </span>
                        </div>

                    </div>

                    <div class="card-body d-flex flex-column">

                        <span class="mb-1">
                            <i class="bi bi-card-text"></i> Description : {{ $clinic->description }}
                        </span>

                        <span class="mb-1">
                            <i class="bi bi-pin-map-fill"></i> Address : {{ $clinic->address }}
                        </span>

                        <span>
                            <i class="bi bi-telephone-forward-fill"></i> Phones :
                            @if (filled($clinic->phones))
                                {{ implode(' , ', $clinic->phones) }}
                            @else
                                <i class="bi bi-ban-fill"></i> No Phones
                            @endif
                        </span>
                    </div>

                    <div class="card-footer d-flex flex-column">
                        <h4 class="text-muted">
                            <i class="bi bi-person-hearts"></i> Doctors
                        </h4>
                        @if ($clinic->usersDoctor->where('is_banned', false)->count())
                            @foreach ($clinic->usersDoctor->where('is_banned', false) as $doctor)
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <div>
                                        <img width="45px" height="45px" class="rounded-circle border"
                                            src="{{ $doctor->image_url }}">
                                    </div>
                                    <div class="ms-2">
                                        {{ $doctor->name }} - {{ $doctor->category?->name }}
                                        <br><small>{{ $doctor->certificate }}</small>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if ($clinic->categories->where('status', true)->count())
                            <h4 class="m-0 mt-1 pt-2 text-muted border-top">
                                <i class="bi bi-boxes"></i> Categories
                            </h4>
                            <div class="d-md-flex flex-column">
                                @foreach ($clinic->categories->where('status', true) as $category)
                                    <div>
                                        <span class="ps-md-2 fw-bolder">
                                            {{ $loop->iteration }} - {{ $category->name }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Rating --}}
        <div class="card mt-2">
            <div class="card-header">
                <i class="bi bi-star-fill"></i> Rating
            </div>
            @auth
                @if (!$clinic->rates()->where('user_id', auth()->id())->exists())
                    <div class="card-body">
                        <form action="{{ route('clinics.rating.me', compact('clinic')) }}" method="post">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @csrf
                            <label for="">Rating Me</label>
                            <select name="rate" class="form-select mb-3 text-warning">
                                <option selected value="1">&#9733;</i></option>
                                <option value="2">&#9733;&#9733;</i></option>
                                <option value="3">&#9733;&#9733;&#9733;</option>
                                <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                            </select>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="comment" placeholder="Comment...">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-100">Send Rating</button>
                            </div>
                        </form>
                    </div>
                @endif
            @endauth

            <div class="card-footer d-flex flex-column">
                @if ($clinic->rates->count())
                    <p class="m-0 mt-1 text-muted">All Rating</p>
                    @foreach ($clinic->rates as $rate)
                        <div class="d-md-flex flex-row align-items-center d-flex py-1 border-top">
                            <div>
                                <img width="45px" height="45px" class="rounded-circle border"
                                    src="{{ $rate?->user?->image_url }}">
                                <span class="ps-md-2 fw-bolder">{{ $rate?->user?->name }}</span>
                            </div>

                            <span class="text-overflow ms-2">
                                {{ $rate?->comment }}
                            </span>
                            <div class="ms-auto d-md-flex flex-column">
                                <span class="text-warning">
                                    @for ($i = 1; $i <= $rate->rate; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                                </span>
                                <span class="text-muted text-wrap">{{ $rate?->created_at?->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
