<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEducationRequest;
use App\Http\Resources\EducationResource;
use App\Models\Education;
use App\Models\User;

class EducationController extends Controller
{
    public function createEducation(CreateEducationRequest $request)
    {
        $user = User::first();
        
        $new_education = $request->validated();
        $new_education['user_id'] = $user->id;

        $education = Education::create($new_education);

        return response()->json([
            'data' => new EducationResource($education),
            'message' => 'Created data success',
            'errors' => null,
        ], 201);
    }
}
