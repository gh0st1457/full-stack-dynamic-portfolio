<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;      // Import Project
use App\Models\Skill;        // Import Skill
use App\Models\Study;        // <--- Add this line
use App\Models\Achievement;  // Import Achievement
use App\Models\Resume;       // Import Resume

class HomeController extends Controller
{
    /**
     * Display the main portfolio page.
     */
    public function index() // or whatever your method name is
    {
        // 1. Define the missing variables first
        $featuredProjects = Project::where('is_featured', true)->get(); // Example query
        $skills = Skill::all();
        $study = Study::all(); // or Education::all()
        $achievements = Achievement::all();
    
        // 2. Your existing Resume query
        $resume = Resume::latest('published_at')->first();
    
        // 3. Now pass them to the view
        return view('home', compact(
            'featuredProjects',
            'skills',
            'study',
            'achievements',
            'resume'
        ));
    }
}