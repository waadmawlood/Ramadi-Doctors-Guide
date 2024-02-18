@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h3 class="py-4">
            <div class="d-md-flex flex-row justify-content-between">

                <div class="fw-bold" role="title">
                    {{ $clinic->name }}
                </div>

                <a href="{{ route('clinics') }}" class="btn btn-outline-primary">Go Clinics</a>
            </div>
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <img width="45px" height="45px" class="rounded-circle border me-3" style="object-fit: cover;"
                            src="{{ $clinic->logo_url }}">
                        <div class="fw-bold">{{ $clinic->name }}</div>
                        <div class="ms-auto text-warning">
                            @for ($i = 1; $i <= $clinic->rate; $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                            ({{ $clinic->rate }})
                        </div>
                    </div>

                    {{-- Information --}}
                    <div class="card-body">
                        @if (filled($clinic->description))
                            <div class="mb-3">
                                <i class="bi bi-card-text"></i> <strong>Description:</strong>
                                {{ $clinic->description }}
                            </div>
                        @endif
                        <div class="mb-3">
                            <i class="bi bi-pin-map-fill"></i> <strong>Address:</strong>
                            {{ $clinic->address }}
                        </div>
                        <div>
                            <i class="bi bi-telephone-forward-fill"></i> <strong>Phones:</strong>
                            @if (filled($clinic->phones))
                                {{ implode(' , ', $clinic->phones) }}
                            @else
                                <span class="text-muted">No Phones</span>
                            @endif
                        </div>
                        @if (filled($clinic->website))
                            <div class="mt-3">
                                <i class="bi bi-box-arrow-up-right"></i> <strong>Link:</strong>
                                <a href="{{ $clinic->website }}">{{ $clinic->website }}</a>
                            </div>
                        @endif
                    </div>

                    {{-- Doctors --}}
                    <div class="card-footer">
                        <h4 class="text-muted"><i class="bi bi-person-hearts"></i> Doctors</h4>
                        @if ($clinic->usersDoctor->where('is_banned', false)->count())
                            @foreach ($clinic->usersDoctor->where('is_banned', false) as $doctor)
                                <div class="d-flex align-items-center mb-2">
                                    <img width="45px" height="45px" class="rounded-circle border me-3"
                                        style="object-fit: cover;" src="{{ $doctor->image_url }}">
                                    <div class="fw-bold">
                                        {{ $doctor->name }}<br>
                                        <small>{{ $doctor->certificate }}</small>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if ($clinic->categories->where('status', true)->count())
                            <hr>
                            <h4 class="mt-3 mb-2 text-muted"><i class="bi bi-boxes"></i> Categories</h4>
                            <div class="ps-3">
                                @foreach ($clinic->categories->where('status', true) as $category)
                                    <div>{{ $loop->iteration }} - {{ $category->name }}</div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Appointment Booking --}}
        @auth
            @if (auth()->user()?->role === 'Customer')
                <div class="card mt-2 mb-3">
                    <div class="card-header"><i class="bi bi-clock-fill"></i> Appointment Booking</div>

                    <div class="card-footer">
                        @if ($isBooking)
                            <div class="alert alert-info">You have requested an appointment in advance</div>
                        @else
                            <form action="{{ route('clinics.booking.send', compact('clinic')) }}" method="post"
                                class="d-flex flex-wrap align-items-center">
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
                                <div class="m-1">
                                    <input type="text" class="form-control" name="name" placeholder="Patient name...">
                                </div>
                                <div class="m-1">
                                    <input type="text" class="form-control" name="age" placeholder="Patient Age...">
                                </div>
                                <div class="m-1">
                                    <input type="text" class="form-control" name="number" placeholder="Patient Number...">
                                </div>
                                <div class="m-1">
                                    <select class="form-select" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="m-1">
                                    <select class="form-select" name="city">
                                        <option value="الرمادي">الرمادي</option>
                                        <option value="هيت">هيت</option>
                                        <option value="الخالدية">الخالدية</option>
                                        <option value="الحبانية">الحبانية</option>
                                        <option value="الفلوجة">الفلوجة</option>
                                        <option value="حصيبة الشرقية">حصيبة الشرقية</option>
                                        <option value="عامرية الفلوجة">عامرية الفلوجة</option>
                                        <option value="البغدادي">البغدادي</option>
                                        <option value="حديثة">حديثة</option>
                                        <option value="راوة">راوة</option>
                                        <option value="عنة">عنة</option>
                                        <option value="القائم">القائم</option>
                                        <option value="حصيبة">حصيبة</option>
                                    </select>
                                </div>

                                <div class="m-1">
                                    <button type="submit" class="btn btn-info">Booking</button>
                                </div>
                            </form>
                        @endif

                        @if ($clinic->bookingsLast5->count())
                            <div class="my-2">
                                <div class="list-group">
                                    @foreach ($clinic->bookingsLast5 as $booking)
                                        <div class="list-group-item border-top">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    @if ($booking->status)
                                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                                        <span class="text-success">Success</span>
                                                    @else
                                                        <i class="bi bi-clock-fill text-warning me-2"></i>
                                                        <span class="text-warning">Pending</span>
                                                    @endif
                                                </div>
                                                <div class="text-muted text-center">
                                                    @if ($booking->status)
                                                        <span
                                                            class="text-success">{{ $booking->date_at?->format('d / m h:i A D') }}</span>
                                                    @else
                                                        <span class="text-warning">No Date Yet.!</span>
                                                        <form
                                                            action="{{ route('clinics.booking.delete', compact('booking')) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger py-1 px-2">
                                                                <i class="bi bi-trash3-fill"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row g-0 mt-2">
                                                <div class="col-md-3">
                                                    <span class="fw-bold">{{ $booking->name }}</span>
                                                </div>
                                                <div class="col-md-1 text-muted">
                                                    {{ $booking->age }} Years
                                                </div>
                                                <div class="col-md-1 text-muted">
                                                    {{ $booking->gender }}
                                                </div>
                                                <div class="col-md-1 text-muted">
                                                    {{ $booking->city }}
                                                </div>
                                                <div class="col-md-2 text-muted">
                                                    {{ $booking->number }}
                                                </div>
                                                <div class="col-md-4 text-muted">
                                                    @if (filled($booking->notes))
                                                        <i class="bi bi-card-list me-1"></i>
                                                        {{ $booking->notes }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        @endauth

        {{-- Rating --}}
        <div class="card mt-2">
            <div class="card-header">
                <i class="bi bi-star-fill"></i> Rating
            </div>

            @auth
                @if (!$clinic->rates()->where('user_id', auth()->id())->exists())
                    <div class="card-body">
                        <form action="{{ route('clinics.rating.me', compact('clinic')) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="rate" class="form-label">Rating</label>
                                <select id="rate" name="rate" class="form-select text-warning">
                                    <option value="1">&#9733;</option>
                                    <option value="2">&#9733;&#9733;</option>
                                    <option value="3">&#9733;&#9733;&#9733;</option>
                                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <input type="text" class="form-control" id="comment" name="comment"
                                    placeholder="Comment...">
                            </div>
                            <button type="submit" class="btn btn-warning w-100">Send Rating</button>
                        </form>
                    </div>
                @endif
            @endauth

            <div class="card-footer">
                @if ($clinic->rates->count())
                    <div class="list-group">
                        <p class="list-group-item list-group-item-action m-0 mt-1 text-muted">All Ratings</p>
                        @foreach ($clinic->rates as $rate)
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img width="45px" height="45px" class="rounded-circle border me-2"
                                            style="object-fit: cover;" src="{{ $rate->user->image_url }}">
                                        <div>
                                            <span class="fw-bold">{{ $rate->user->name }}</span>
                                        </div>
                                        <div class="ms-2 badge border">
                                            <span class="text-muted">{{ $rate->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-warning">
                                            @for ($i = 1; $i <= $rate->rate; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                            ({{ $rate->rate }})
                                        </span>
                                    </div>
                                </div>
                                <p class="mb-0">{{ $rate->comment }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        {{-- Times --}}
        <div class="card mt-2">
            <div class="card-header">
                <i class="bi bi-calendar2-date-fill"></i> Times
            </div>
            <div class="card-footer">
                @if ($clinic->times->count())
                    <div class="list-group">
                        @foreach ($clinic->times as $time)
                            <div class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="col-md-1 me-1">
                                    <span class="fw-bold">{{ $time->day->name }}</span>
                                </div>
                                @if ($time->status)
                                    <span class="badge bg-success fs-6">
                                        {{ $time->open ? $time->open->format('h:i A') : 'Closed' }}
                                        @if ($time->close)
                                            - {{ $time->close->format('h:i A') }}
                                        @endif
                                    </span>
                                @else
                                    <span class="badge bg-danger fs-6">Closed xxxxxxxxxxxx </span>
                                @endif
                                <div>

                                </div>
                                <div class="ms-2">
                                    @if ($time->status)
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    @else
                                        <i class="bi bi-x-circle-fill text-danger"></i>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted">No times available.</p>
                @endif
            </div>
        </div>

    </div>
@endsection
