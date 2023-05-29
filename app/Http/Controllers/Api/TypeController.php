<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return response()->json([
            'success' => false,
            'result' => $types
        ]);
    }
    public function show($slug)
    {

        $type = Type::where('slug', $slug)->with('portf')->first();

        if ($type) {

            return response()->json([
                'success' => true,
                'result' => $type
            ]);
        }
    }
}
