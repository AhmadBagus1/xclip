<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display the public projects page.
     */
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | FEATURED PROJECTS
        |--------------------------------------------------------------------------
        */

        $featuredProjects = Project::where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->get();


        /*
        |--------------------------------------------------------------------------
        | ALL ACTIVE PROJECTS
        |--------------------------------------------------------------------------
        */

        $projects = Project::where('is_active', true)
            ->latest()
            ->get();


        return view('public.projects.projects', compact(
            'projects',
            'featuredProjects'
        ));
    }


    /**
     * Display a single public project.
     */
    public function show(Project $project)
    {
        /*
        |--------------------------------------------------------------------------
        | ONLY ACTIVE PROJECTS CAN BE VIEWED PUBLICLY
        |--------------------------------------------------------------------------
        */

        if (!$project->is_active) {
            abort(404);
        }


        return view('public.projects.show', compact('project'));
    }
}
