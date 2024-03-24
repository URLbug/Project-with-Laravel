<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(int $id): View
    {
        try
        {
            $project = Project::query()
                ->where('id', $id)
                ->first();

            return view(
                'projects.detail',
                [
                    'name' => $project->name,
                    'description' => $project->description,
                    'link' => $project->link,
                ]
            );
        }
        catch(\ErrorException $exception)
        {
            return abort(404);
        }
    }
}
