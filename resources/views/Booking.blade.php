@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h4>
            <i class="bi bi-clock-fill"></i> Bookings
        </h4>

        @if ($bookings->count())
            <div class="my-2 d-md-flex flex-column mt-4">
                @foreach ($bookings as $booking)
                    <a class="text-decoration-none"
                        href="{{ route('clinics.show', ['clinic' => $booking->clinic_id, 'booking_id' => $booking->id]) }}">
                        <div
                            class="py-1 mb-3 border-top d-md-flex flex-row flex-wrap align-items-center text-center card hover-shadow" {{ $booking->seen ? null : 'style=background-color:#ececec' }}>
                            <div class="p-1 col-md-1">
                                @if ($booking->status)
                                    {{ $loop->iteration }}- <i class="bi bi-check-circle-fill text-success"> Success </i>
                                @else
                                    - <i class="bi bi-clock-fill text-warning"> Pending </i>
                                @endif
                            </div>
                            <div class="ms-2 p-1 col-md-2 text-muted border-start">
                                @if ($booking->status)
                                    <span class="text-success">{{ $booking->date_at?->format('d / m h:i A D') }}</span>
                                @else
                                    <span class="text-warning">No Date Yet.!</span>
                                @endif
                            </div>
                            <div class="ms-2 p-1 col-md-3 text-muted border-start">
                                <span class="fw-bold">{{ $booking->name }}</span>
                            </div>
                            <div class="ms-2 p-1 col-md-1 text-muted border-start">
                                {{ $booking->age }} Years
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
                                <div class="p-2 col-md-12 text-muted text-start border-top">
                                    <i class="bi bi-card-list"></i> : {{ $booking->notes }}
                                </div>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="text-danger">
                <i class="bi bi-ban-fill"></i> No Content
            </div>
        @endif
    </div>
@endsection
