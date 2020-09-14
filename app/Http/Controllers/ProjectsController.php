<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;
use DB;

class ProjectsController extends Controller
{

    public function index() {
        $projects = Project::orderBy('construction_date', 'desc')->get();
        return view('projects.index')->with('projects', $projects);
    }

    public function create() {
        return view('projects.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'project_name' => 'required',
            'location' => 'required',
            'investor_name' => 'required',
            'build_type' => 'required',
            'contruction_date' => 'required',
            'status' => 'required',
        ]);
        
        //Create project images folder and upload images to that folder
        $folderName = $request->input('project_images_folder');
        $locationToStore = 'public/'.$folderName;
        //Loop through and upload each image
        foreach ($_FILES['images']['name'] as $image) {
            if ( $image != '' ) {
                $imageNameWithExt = $image->getClientOriginalName();
                $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $imageNameToStore = $imageName.'_'.time().'.'.$extension;
                $path = $image->storeAs($locationToStore, $imageNameToStore);
            }
        }


        //Create Project
        $project = new Project;

        $project->project_name = $request->input('project_name');
        $project->location = $request->input('location');
        $project->investor_name = $request->input('investor_name');
        $project->build_type = $request->input('build_type');
        $project->surface_area = $request->input('surface_area');
        $project->construction_date = $request->input('contruction_date');
        $project->status = $request->input('status');
        $project->project_images_folder = $request->input('project_images_folder');

        $project->save();

        return redirect('/projects')->with('success', 'Пројекат креиран');

    }

    public function show($id) {
        $project = Project::find($id);
        return view('projects.show')->with('project', $project);
    }

    public function edit($id) {
        $project = PRoject::find($id);
        return view('projects.edit')->with('project', $project);
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'project_name' => 'required',
            'location' => 'required',
            'investor_name' => 'required',
            'build_type' => 'required',
            'contruction_date' => 'required',
            'status' => 'required',
        ]);
        
        //Create project images folder and upload images to that folder
        $folderName = $request->input('project_images_folder');
        $locationToStore = 'public/'.$folderName;
        //Loop through and upload each image
        foreach ($_FILES['images']['name'] as $image) {
            if ( $image != '' ) {
                $imageNameWithExt = $image->getClientOriginalName();
                $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $imageNameToStore = $imageName.'_'.time().'.'.$extension;
                $path = $image->storeAs($locationToStore, $imageNameToStore);
            }
        }


        //Update Project
        $project = Project::find($id);

        $project->project_name = $request->input('project_name');
        $project->location = $request->input('location');
        $project->investor_name = $request->input('investor_name');
        $project->build_type = $request->input('build_type');
        $project->surface_area = $request->input('surface_area');
        $project->construction_date = $request->input('contruction_date');
        $project->status = $request->input('status');
        $project->project_images_folder = $request->input('project_images_folder');

        $project->save();

        return redirect('/projects')->with('success', 'Пројекат измењен');

    }

    public function destroy($id) {
        $project = Project::find($id);
        if ($project->project_images_folder != 'NULL' ) {
            Storage::delete('public/'.$project->project_images_folder);
        }
        $project->delete();
        return redirect('projects')->with('success', 'Пројекат обрисан');
    }

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
}
