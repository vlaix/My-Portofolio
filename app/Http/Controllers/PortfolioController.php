<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio single-page application.
     */
    public function index(): View
    {
        $projects = Project::ordered()->get();
        $skills = Skill::ordered()->get();

        return view('welcome', compact('projects', 'skills'));
    }

    /**
     * Display the specified project details.
     */
    public function show(string $slug): View
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $otherProjects = Project::where('id', '!=', $project->id)->ordered()->take(3)->get();

        return view('projects.show', compact('project', 'otherProjects'));
    }
}
