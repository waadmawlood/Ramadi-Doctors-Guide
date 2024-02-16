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
                                ({{ $clinic->rate }})
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

        {{-- Appointment Booking --}}
        @auth
            @if (auth()->user()?->role === 'Customer')
                <div class="card mt-2 mb-3">
                    <div class="card-header">
                        <i class="bi bi-clock-fill"></i> Appointment Booking
                    </div>

                    <div class="card-footer">
                        @if ($isBooking)
                            You have requested an appointment in advance
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
                            <div class="my-2 d-md-flex flex-column">
                                @foreach ($clinic->bookingsLast5 as $booking)
                                    <div class="py-1 border-top d-md-flex flex-row flex-wrap align-items-center text-center">
                                        <div class="p-1 col-md-1">
                                            @if ($booking->status)
                                                - <i class="bi bi-check-circle-fill text-success"> Success </i>
                                            @else
                                                - <i class="bi bi-clock-fill text-warning"> Pending </i>
                                            @endif
                                        </div>
                                        <div class="ms-2 p-1 col-md-2 text-muted border-start">
                                            @if ($booking->status)
                                                <span class="text-success">{{ $booking->date_at?->format('d/m h:i A D') }}</span>
                                            @else
                                                <span class="text-warning">No Date Yet.!</span>

                                                <form action="{{ route('clinics.booking.delete', compact('booking')) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" href="http://"><i class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            @endif
                                        </div>
                                        <div class="ms-2 p-1 col-md-3 text-muted border-start">
                                            <span class="fw-bold">{{ $booking->name }}</span>
                                        </div>
                                        <div class="ms-2 p-1 col-md-1 text-muted border-start">
                                            {{ $booking->age }}
                                        </div>
                                        <div class="ms-2 p-1 col-md-1 text-muted border-start">
                                            {{ $booking->gender }}
                                        </div>
                                        <div class="ms-2 p-1 col-md-1 text-muted border-start">
                                            {{ $booking->city }}
                                        </div>
                                        <div class="ms-2 p-1 col-md-2 text-muted border-start">
                                            {{ $booking->number }}
                                        </div>
                                        @if (filled($booking->notes))
                                            <div class="p-1 col-md-12 text-muted text-start border-bottom">
                                                <i class="bi bi-card-list"></i> : {{ $booking->notes }}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
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
                                <button type="submit" class="btn btn-warning w-100">Send Rating</button>
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

        {{-- Times --}}
        <div class="card mt-2">
            <div class="card-header">
                <i class="bi bi-calendar2-date-fill"></i> Times
            </div>

            <div class="card-footer d-flex flex-column">
                @if ($clinic->times->count())
                    @foreach ($clinic->times as $time)
                        <div class="d-md-flex flex-row align-items-center d-flex py-2 border-top">
                            <span class="ps-md-2 fw-bolder">{{ $time->day->name }} |</span>
                            @if ($time->status)
                                <span class="text-overflow ms-2">
                                    {{ $time->open?->format('h:i:s a') }} {{ filled($time->close) ? '-' : '' }}
                                    {{ $time->close?->format('h:i:s a') }}
                                </span>
                            @endif
                            <div class="ms-auto">
                                @if ($time->status)
                                    <span class="text-success"><i class="bi bi-check-circle-fill"></i></span>
                                @else
                                    <span class="text-danger"><i class="bi bi-x-circle-fill"></i></span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
