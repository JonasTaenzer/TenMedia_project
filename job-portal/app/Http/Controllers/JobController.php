<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with(['company', 'category', 'user'])->latest()->get();

        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        $companies = Company::all();
        $categories = Category::all();

        return view('jobs.create', compact('companies', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|integer',
            'company_id' => 'required|exists:companies,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $validated['user_id'] = 1;

        Job::create($validated);

        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich erstellt.');
    }

    public function show(Job $job)
    {
        $job->load(['company', 'category', 'user']);

        return view('jobs.show', compact('job'));
    }

    public function edit(Job $job)
    {
        $companies = Company::all();
        $categories = Category::all();

        return view('jobs.edit', compact('job', 'companies', 'categories'));
    }

    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|integer',
            'company_id' => 'required|exists:companies,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich aktualisiert.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Job erfolgreich gelöscht.');
    }
}