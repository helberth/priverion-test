<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Questions/Index', [
            'questions' => Question::with('quiz:id,name')->latest()->get(),
        ]);
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
    public function store(Request $request): RedirectResponse
    {
        // $quiz_id = $request->route('quiz.id');
        
        $quiz_id = 4;
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        // $request->questions()->create($validated);
        //$request->user()->quizzes()->create($validated);  
        //Quiz::
        // $request->user()->quizzes()->questions()->create($validated);
        //Question::create($validated);
 
        return redirect(route('question.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question): RedirectResponse
    {
        $this->authorize('update', $question);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $question->update($validated);
 
        return redirect(route('question.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question): RedirectResponse
    {
        $this->authorize('delete', $question);
 
        $question->delete();
 
        return redirect(route('question.index'));
    }
}
