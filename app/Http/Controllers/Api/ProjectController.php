<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portf;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $portf = Portf::all();
        return response()->json([
            'success' => true,
            'results' => $portf

        ]);
    }
}
