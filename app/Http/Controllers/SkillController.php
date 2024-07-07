<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function updateAllSkills(Request $request)
    {
        try {

            $user = User::first();

            // remove all skills
            Skill::where(['user_id' => $user->id])->delete();

            $skills = collect($request->skills)->map(function ($skill) use ($user) {
                return [
                    'user_id' => $user->id,
                    'skill' => $skill['skill'],
                    'level' => $skill['level'],
                ];
            })->toArray();

            // insert all skills
            $new_skills = Skill::insert($skills);

            return response()->json([
                'data' => $user->skills,
                'message' => 'Updated data success',
                'errors' => null,
            ], 201);
        } catch (Exception $error) {
            return response()->json([
                'message' => 'Something went error',
                'errors' => null,
            ], 500);
        }
    }
}
