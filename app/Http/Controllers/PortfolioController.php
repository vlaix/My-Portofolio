<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class PortfolioController extends Controller
{
    /**
     * Ensure database has projects and skills seeded (safe for ephemeral/serverless containers)
     */
    protected function ensureDataSeeded(): void
    {
        try {
            if (Schema::hasTable('projects') && Project::count() === 0) {
                Artisan::call('db:seed', ['--force' => true]);
            }
        } catch (\Throwable $e) {
            try {
                Artisan::call('migrate', ['--force' => true, '--seed' => true]);
            } catch (\Throwable $e2) {
                report($e2);
            }
        }
    }

    /**
     * Display the portfolio single-page application.
     */
    public function index(): View
    {
        $this->ensureDataSeeded();

        $projects = Project::ordered()->get();
        $skills = Skill::ordered()->get();

        return view('welcome', compact('projects', 'skills'));
    }

    /**
     * Display the specified project details.
     */
    public function show(string $slug): View
    {
        $this->ensureDataSeeded();

        $project = Project::where('slug', $slug)->firstOrFail();
        $otherProjects = Project::where('id', '!=', $project->id)->ordered()->take(3)->get();

        return view('projects.show', compact('project', 'otherProjects'));
    }
}
