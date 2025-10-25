<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $projects = Project::all();

    // Group projects by creation month
    $projectsByMonth = Project::selectRaw('COUNT(*) as count, MONTHNAME(created_at) as month')
        ->groupBy('month')
        ->orderByRaw('MIN(created_at)')
        ->pluck('count', 'month');

    $months = $projectsByMonth->keys();
    $counts = $projectsByMonth->values();

    return view('admin.index', [
        'projects' => $projects,
        'months'   => $months,
        'counts'   => $counts,
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'url'         => 'required|url',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Project::create($validated);

        return redirect()->route('admin.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show the form for editing an existing project.
     */
    public function edit(Project $admin) // Route model binding
    {
        return view('admin.edit', ['project' => $admin]);
    }

    /**
     * Update an existing project.
     */
    public function update(Request $request, Project $admin)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'url'         => 'required|url',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($admin->thumbnail) {
                Storage::disk('public')->delete($admin->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $admin->update($validated);

        return redirect()->route('admin.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Delete a project.
     */
    public function destroy(Project $admin)
    {
        if ($admin->thumbnail) {
            Storage::disk('public')->delete($admin->thumbnail);
        }

        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Project deleted successfully.');
    }
}
