<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateBirth_dateController extends Controller
{
    public function __invoke(Request $request)
    {   
        $request->validate([
            'birth_date' => ['required', 'date_format:Y-m-d'],
        ]);
 
        $request->user()->profile()->update([
            'birth_date' => $request->birth_date
        ]);
 
        return response()->json([
            'message' => 'Your birth date has been updated.',
        ], Response::HTTP_ACCEPTED);
    }
}
