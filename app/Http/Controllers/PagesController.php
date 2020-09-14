<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function index() {
        $projects = Project::orderBy('construction_date', 'desc')->get();
        return view('pages.index')->with('projects', $projects);
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }

    public function projects() {
        return view('pages.projects');
    }

    public function team() {
        return view('pages.team');
    }

    public function videos() {
        return view('pages.videos');
    }

}
