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

        if (isset($result['error'])) {
            return back()->withErrors(['error' => $result['error']])->withInput();
        }

        // Extract distance and duration from result
        $distance = $result['full_json']['rows'][0]['elements'][0]['distance']['text'] ?? 'N/A';
        $duration = $result['full_json']['rows'][0]['elements'][0]['duration']['text'] ?? 'N/A';

        return back()->with([
            'result' => $result,
            'distance' => $distance,
            'duration' => $duration,
            'origins' => $origins,
            'destinations' => $destinations,
        ])->withInput();
    }
}