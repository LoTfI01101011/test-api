<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateBioController extends Controller
{
    public function __invoke(Request $request)
    {   
        $request->validate([
            'bio' => ['required', 'string'],
        ]);
 
        $request->user()->profile()->update([
            'bio' => $request->bio
        ]);
 
        return response()->json([
            'message' => 'Your Bio has been updated.',
        ], Response::HTTP_ACCEPTED);
    }
}
