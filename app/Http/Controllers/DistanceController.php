<?php

namespace App\Http\Controllers;

use App\Services\GoogleDistanceService;
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
        return view('calculate_distance');
    }

    public function calculateDistance(Request $request)
    {
        $request->validate([
            'origins' => 'required|string',
            'destinations' => 'required|string',
        ]);

        $googleDistanceService = app()->make(\App\Services\GoogleDistanceService::class);

        $origins = $request->input('origins');
        $destinations = $request->input('destinations');

        $result = $googleDistanceService->getDistance($origins, $destinations);

        if (isset($result['error'])) {
            return redirect()->back()->withErrors(['error' => $result['error']]);
        }

        return redirect()->back()->with('result', $result);
    }
}