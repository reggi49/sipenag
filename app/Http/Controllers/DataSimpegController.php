<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataSimpegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filePath = storage_path('app/simpeg.json');

        // Check if the file exists
        if (file_exists($filePath)) {
            $fileContents = file_get_contents($filePath);
            $jsonData = json_decode($fileContents, true); // Decode JSON data

            // Return JSON response
            return response()->json($jsonData);
        } else {
            // File does not exist, handle the case accordingly
            return response()->json(['error' => 'File not found'], 404);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
