<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UpdateStateController extends Controller
{
    public function __invoke(Request $request)
    {   
        $request->validate([
            'state' => ['required', 'string'],
        ]);
 
        $request->user()->profile()->update([
            'state' => $request->state
        ]);
 
        return response()->json([
            'message' => 'Your State has been updated.',
        ]);
    }
}
