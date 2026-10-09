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
        | ALL ACTIVE PROJECTS
        |--------------------------------------------------------------------------
        |
        | Menampilkan seluruh project yang aktif.
        | Project diurutkan dari yang terbaru dan menggunakan pagination
        | agar halaman Projects tidak memuat seluruh data sekaligus.
        |
        */

        $projects = Project::query()
            ->where('is_active', true)
            ->latest()
            ->paginate(9);


        /*
        |--------------------------------------------------------------------------
        | PROJECT VIEW
        |--------------------------------------------------------------------------
        |
        | $projects dikirim ke halaman Projects sebagai paginator.
        |
        */

        return view(
            'public.projects.projects',
            compact('projects')
        );
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
        |
        | Project yang tidak aktif tidak boleh ditampilkan
        | pada halaman publik.
        |
        */

        if (!$project->is_active) {
            abort(404);
        }


        /*
        |--------------------------------------------------------------------------
        | PROJECT DETAIL VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'public.projects.show',
            compact('project')
        );
    }
}
