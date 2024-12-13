<?php

namespace App\Http\Controllers;

use App\Services\GoogleDistanceService;
use App\Models\Actor;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
    protected $googleDistanceService;

    public function __construct(GoogleDistanceService $googleDistanceService)
    {
        $this->googleDistanceService = $googleDistanceService;
    }

    public function index()
    {
        $actors = Actor::all(); // Fetch all actors
        return view('calculate_distance', compact('actors'));
    }

    public function calculateDistance(Request $request)
    {
        $request->validate([
            'origins' => 'required',
            'destinations' => 'required',
        ]);

        $origins = $request->input('origins');
        $destinations = $request->input('destinations');

        // Call the service to get the distance and JSON response
        $result = $this->googleDistanceService->calculateDistance($origins, $destinations);

        // Pass results and input values back to the session
        // Return view with result and old values
    return back()->with([
        'result' => $result,
        'origins' => $origins,
        'destinations' => $destinations,
    ])->withInput();
    }
}