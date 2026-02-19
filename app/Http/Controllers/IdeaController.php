<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $ideas = Idea::all();
        return view('ideas.index', [
            'ideas' => $ideas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validation to make sure the description is not empty
        $request->validate([
            'description' => 'required|string|max:255|min:3',
        ]);

        $idea = trim($request->input('description'));

        Idea::create([
            'description' => $idea,
            'state' => 'idea',
        ]);
        return redirect()->route('ideas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        return view('ideas.edit', [
            'idea' => $idea,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $idea->update($validated);

        return redirect()->route('ideas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect()->route('ideas.index');
    }
}
