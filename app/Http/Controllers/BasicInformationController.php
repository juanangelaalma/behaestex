<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicInformationRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BasicInformationController extends Controller
{
    public function updateBasicInformation(BasicInformationRequest $request)
    {
        $user = User::get()->first();
        $basic_information = $request->validated();

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            
            $filename = time() . '.' . $file->getClientOriginalName();
            $path = "uploads/$filename";
            
            $file->move(public_path('uploads'), $filename);
            
            $basic_information['avatar'] = $path;

            if (File::exists($user->avatar)) {
                File::delete($user->avatar);
            }
        }


        $user->update($basic_information);

        return response()->json([
            'data' => new UserResource($user),
            'message' => 'Update data success',
            'errors' => null,
        ]);
    }

    public function updateSummary(Request $request)
    {
        $user = User::get()->first();

        $user->update([
            'summary' => $request->summary
        ]);

        return response()->json([
            'data' => [
                'summary' => $user->summary,
            ],
            'message' => 'Update summary success',
            'errors' => null,
        ]);
    }
}
