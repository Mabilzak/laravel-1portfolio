<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('home', [
            'title_head' => "Home",
            // 'post_works' => Project::all()
            'post_works' => Project::with(['category', 'writer'])->latest()->get()
        ]);
    }

    public function find(Project $project)
    {

        return view('detail_work', [
            "title_head" => "Work Detail",
            "work" => $project
        ]);
    }

}