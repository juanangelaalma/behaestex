<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Error;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function updateAllSkills(Request $request)
    {
        try {
            $skills = $request->skills;

            $user = User::first();
            
            // remove all skills
            Skill::where(['user_id' => $user->id])->delete();

            foreach ($skills as &$skill) {
                $skill['user_id'] = $user->id;
            }

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
