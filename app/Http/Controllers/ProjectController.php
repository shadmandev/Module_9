<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Projects::orderBy("created_at","desc")->get();
        return view("project", compact("projects"));
    }
    public function create()
    {
        return view("createProject");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        Projects::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        $project = Projects::find($id);
        $project->delete();
        return back();
    }
}
