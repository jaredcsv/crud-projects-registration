<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
    // Display a list of projects
    public function index(): Renderable
    {
        $projects = Project::paginate();
        return view("projects.index", compact("projects"));
    }

    // Show the form for creating a new project
    public function create(): Renderable
    {
        return view("projects.create");
    }

    // Store a newly created project in storage
    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'funding_source' => 'required|string|max:255',
            'planned_amount' => 'required|numeric',
            'sponsored_amount' => 'required|numeric',
            'own_funds' => 'required|numeric',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    // Show the specified project
    public function show(Project $project): Renderable
    {
        return view('projects.show', compact('project'));
    }

    // Show the form for editing the specified project
    public function edit(Project $project): Renderable
    {
        return view('projects.edit', compact('project'));
    }

    // Update the specified project in storage
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'funding_source' => 'required|string|max:255',
            'planned_amount' => 'required|numeric',
            'sponsored_amount' => 'required|numeric',
            'own_funds' => 'required|numeric',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    // Remove the specified project from storage
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function getPDF(Project $project)
    {
        // Project data
        $institutionName = 'Escuela Superior de Innovacion y Tecnologia';
        $date = date('d-m-Y');
        $projectData = [
            'id' => $project->id,
            'projectName' => $project->project_name,
            'fundingSource' => $project->funding_source,
            'plannedAmount' => '$' . number_format($project->planned_amount, 2),
            'sponsoredAmount' => '$' . number_format($project->sponsored_amount, 2),
            'ownFunds' => '$' . number_format($project->own_funds, 2)
        ];

        // Load the view and generate the PDF
        $pdf = Pdf::loadView('projects.pdf', compact('institutionName', 'date', 'projectData'));

        // Download the PDF file
        return $pdf->download('project_' . $project->id . '.pdf');
    }

}
