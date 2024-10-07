<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DogController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.thedogapi.com/v1/']);
    }

    public function index()
    {
        return view('welcome'); // Default view
    }

    public function randomDog()
    {
        try {
            $response = $this->client->get('images/search', [
                'headers' => [
                    'x-api-key' => env('DOG_API_KEY'), // Include the API key here
                ],
                'query' => [
                    'has_breeds' => 1, // Only return images that have breed information
                    'limit' => 1,      // Limit to one image
                ],
            ]);
            $data = json_decode($response->getBody(), true);
            return view('random', ['image' => $data[0]['url']]);
        } catch (\Exception $e) {
            \Log::error('Error fetching random dog: ' . $e->getMessage());
            return response()->view('errors.api', [], 500);
        }
    }

    public function listBreeds()
    {
        try {
            $response = $this->client->get('breeds', [
                'headers' => [
                    'x-api-key' => env('DOG_API_KEY'), // Include the API key here
                ],
            ]);
            $data = json_decode($response->getBody(), true);
            return view('breeds', ['breeds' => $data]); // Pass breeds data to the view
        } catch (\Exception $e) {
            \Log::error('Error fetching breeds: ' . $e->getMessage());
            return response()->view('errors.api', [], 500);
        }
    }

    public function randomDogByBreed($id)
    {
        try {
            $response = $this->client->get("images/search", [
                'headers' => [
                    'x-api-key' => env('DOG_API_KEY'), // Include the API key here
                ],
                'query' => [
                    'breed_ids' => $id, // Use the breed ID to filter images
                    'limit' => 1,
                    'has_breeds' => 1,
                ],
            ]);
            $data = json_decode($response->getBody(), true);
            
            if (!empty($data)) {
                return view('breed', ['image' => $data[0]['url']]); // Return image URL
            } else {
                return response()->view('errors.api', [], 404); // Handle no image case
            }
        } catch (\Exception $e) {
            \Log::error('Error fetching random dog by breed: ' . $e->getMessage());
            return response()->view('errors.api', [], 500);
        }
    }
}
