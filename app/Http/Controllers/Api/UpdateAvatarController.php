<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateAvatarController extends Controller
{
    public function __invoke(Request $request)
    {   
        $request->validate([
            'avatar' => ['required', 'image'],
        ]);
 
        $request->user()->profile()->update([
            'avatar' => $request->avatar
        ]);
 
        return response()->json([
            'message' => 'Your Avatar has been updated.',
        ], Response::HTTP_ACCEPTED);
    }
}
