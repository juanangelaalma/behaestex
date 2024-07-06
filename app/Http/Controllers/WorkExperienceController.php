<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkExperienceRequest;
use App\Http\Requests\UpdateWorkExperienceRequest;
use App\Http\Resources\WorkExperienceResource;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function createWorkExperience(CreateWorkExperienceRequest $request)
    {
        $user = User::first();
        $new_work_experience = $request->validated();
        $new_work_experience['user_id'] = $user->id;

        $work_experience = WorkExperience::create($new_work_experience);

        return response()->json([
            'data' => new WorkExperienceResource($work_experience),
            'message' => 'Created data success',
            'errors' => null,
        ], 201);
    }

    public function updateWorkExperience(UpdateWorkExperienceRequest $request, $id)
    {
        $work_experience = WorkExperience::find($id);

        if (!$work_experience) {
            return response()->json([
                'data' => null,
                'message' => 'Work experience not found',
                'errors' => null,
            ], 404);
        }

        $work_experience->update(
            $request->validated()
        );

        return response()->json([
            'data' => new WorkExperienceResource($work_experience),
            'message' => 'Updated data success',
            'errors' => null,
        ], 201);
    }

    public function deleteWorkExperience($id)
    {
        WorkExperience::destroy($id);
        return response()->json([
            'data' => true,
            'message' => 'Delete data success',
            'errors' => null,
        ], 200);
    }
}
