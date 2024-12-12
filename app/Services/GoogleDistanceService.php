<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleDistanceService
{
    public function getDistance($origins, $destinations)
    {
        $apiKey = config('services.google_maps.api_key');
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json";

        $response = Http::get($url, [
            'origins' => $origins,
            'destinations' => $destinations,
            'key' => $apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // Extract the distance value in meters
            $distance = $data['rows'][0]['elements'][0]['distance']['value'] ?? null;

            return [
                'full_json' => $data,
                'distance' => $distance, // distance in meters
            ];
        }

        return [
            'error' => 'Failed to fetch data from Google Maps API',
        ];
    }
}