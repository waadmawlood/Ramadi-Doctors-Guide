<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Clinic;
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
            ->when($request->filled('category_id'), fn ($q) => $q->whereHas('categories', fn($query) => $query->where('categories.id', $request->category_id)))
            ->get();

        return view('clinics', compact('clinics', 'categories'));
    }

    public function show(Clinic $clinic)
    {
        return view('pages.clinic', compact('clinic'));
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
}
