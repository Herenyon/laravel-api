<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portf;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $portf = Portf::with('type', 'technologies')->get();

        return response()->json([
            'success' => true,
            'results' => $portf

        ]);
    }
    public function show($slug)
    {

        $project = Portf::where('slug', $slug)->with('type', 'technologies')->first();

        if ($project) {

            return response()->json([
                'success' => true,
                'result' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'result' => null
            ], 404);
        }
    }
}
