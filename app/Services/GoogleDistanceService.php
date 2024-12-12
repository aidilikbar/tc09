<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleDistanceService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('GOOGLE_MAPS_API_KEY'); // Ensure you have the API key in your .env file
    }

    public function calculateDistance($origins, $destinations)
    {
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json';

        // Make a GET request to the Google Distance Matrix API
        $response = Http::get($url, [
            'origins' => $origins,
            'destinations' => $destinations,
            'key' => $this->apiKey,
        ]);

        // Check for a successful response
        if ($response->successful()) {
            $data = $response->json();

            // Parse the response to extract distance and other relevant information
            if (isset($data['rows'][0]['elements'][0]['distance'])) {
                return [
                    'distance' => $data['rows'][0]['elements'][0]['distance']['value'], // Distance in meters
                    'full_json' => $data, // Return the full JSON response for reference
                ];
            }

            return ['error' => 'Unable to calculate distance. Please check the coordinates.'];
        }

        // Handle failed responses
        return ['error' => 'Failed to connect to the Google Distance Matrix API.'];
    }
}