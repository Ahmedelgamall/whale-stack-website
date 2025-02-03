<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Get Projects Page For End User.
     *
     * @return View
     */
    public function getProjects()
    {
        $projects = Project::with('category')->latest()->paginate(30);
        $categories = ProjectCategory::latest()->get();
        return view('website.pages.projects', compact('projects', 'categories'));
    }
}
