<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'actorid' => 'required',
            'roles' => 'required',
            'address' => 'required',
            'postal_code' => 'nullable',
            'city' => 'required',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'geolocation' => 'nullable',
        ]);
        Actor::create($request->all());
        return redirect()->route('actors.index')->with('success', 'Actor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        return view('actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor)
    {
        $request->validate([
            'actorid' => 'required',
            'roles' => 'required',
            'address' => 'required',
            'postal_code' => 'nullable',
            'city' => 'required',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'geolocation' => 'nullable',
        ]);
        $actor->update($request->all());
        return redirect()->route('actors.index')->with('success', 'Actor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect()->route('actors.index')->with('success', 'Actor deleted successfully.');
    }
}
