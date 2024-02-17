<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Clinic;
use App\Models\ClinicBooking;
use Illuminate\Http\Request;

class ClinicsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = Category::all()->where('status', true);
        $clinics = Clinic::query()
            ->where('clinics.status', true)
            ->whereHas('usersDoctor')
            ->when($request->filled('search'), fn ($q) => $q->search($request->search, null, true, true))
            ->when($request->filled('category_id'), fn ($q) => $q->whereHas('categories', fn ($query) => $query->where('categories.id', $request->category_id)))
            ->get()->sortByDesc('id')->sortByDesc('rate');

        return view('clinics', compact('clinics', 'categories'));
    }

    public function show(Clinic $clinic)
    {
        if (auth()->check() && request()->filled('booking_id')) {
            ClinicBooking::query()
                ->where('status', true)
                ->where('seen', false)
                ->where('user_id', auth()->id())
                ->whereNotNull('date_at')
                ->update(['seen' => true]);
        }

        $isBooking = $clinic->bookings()
            ->where('user_id', auth()->id())
            ->where('status', false)
            ->whereBetween('created_at', [now()->subDays(3), now()])
            ->exists();

        return view('pages.clinic', compact('clinic', 'isBooking'));
    }

    public function ratingClinic(Request $request, Clinic $clinic)
    {
        $request->validate([
            'rate' => 'required|numeric|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        if ($clinic->rates()->where('user_id', auth()->id())->exists())
            return back();

        $clinic->rates()->create([
            'user_id' => auth()->id(),
            'rate' => $request->rate,
            'comment' => $request->comment
        ]);

        return back();
    }

    public function bookingClinic(Request $request, Clinic $clinic)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'gender' => 'required|string',
            'city' => 'required|string',
            'number' => 'required|string',
        ]);

        if ($clinic->bookings()->where('user_id', auth()->id())->where('status', false)->whereBetween('created_at', [now()->subDays(3), now()])->exists())
            return back();

        $clinic->bookings()->create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'city' => $request->city,
            'number' => $request->number,
        ]);

        return back();
    }

    public function indexBookingClinic(Request $request)
    {
        $bookings = ClinicBooking::query()->where('user_id', auth()->id())->where('status', true)->get();
        return view('Booking', compact('bookings'));
    }

    public function deleteBookingClinic(ClinicBooking $booking)
    {
        if ($booking->user_id != auth()->id())
            return back();

        $booking->delete();
        return back();
    }
}
