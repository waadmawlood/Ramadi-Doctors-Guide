@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="py-4 d-md-flex flex-row justify-content-between align-items-center flex-wrap">
            <span class="fs-2">Clinics ({{ $clinics->count() }})</span>
            <div>
                <form action="{{ route('clinics') }}" method="get" id="search_clinic" class="row">

                </form>

                <div class="d-md-flex flex-row">
                    <div class="px-0 input-group">
                        <input id="search_input" type="text" class="form-control" name="search" placeholder="search"
                            value="{{ request('search') }}" form="search_clinic">
                        <button type="button" class="btn bg-transparent" style="margin-left: -40px; z-index: 100;"
                            onclick="document.getElementById('search_input').value = '';">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    <div class="px-1">
                        <select class="form-select" name="category_id" form="search_clinic">
                            <option value="" selected>All</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary" form="search_clinic">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-flex flex-row flex-wrap">
            @foreach ($clinics as $clinic)
                <div class="col-md-6 p-1">
                    <div class="card">
                        <div class="card-header">
                            <a class="text-decoration-none" href="{{ route('clinics.show', compact('clinic')) }}">

                                <div class="d-md-flex flex-row align-items-center flex-wrap">
                                    <img width="45px" height="45px" class="rounded-circle border" src="{{ $clinic->logo_url }}">
                                    <span class="ps-2 fw-bolder">{{ $clinic->name }}</span>
                                    <span class="ms-auto text-warning">
                                        @for ($i = 1; $i <= $clinic->rate; $i++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                        ({{ $clinic->rate }})
                                    </span>
                                </div>
                            </a>
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
            @endforeach
        </div>
    </div>
@endsection
