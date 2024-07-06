<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicInformationRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class BasicInformationController extends Controller
{
    public function patchBasicInformation(BasicInformationRequest $request)
    {
        $user = User::get()->first();

        $user->update(
            $request->validated()
        );

        return response()->json([
            'data' => new UserResource($user),
            'message' => 'Update data success',
            'errors' => null,
        ]);
    }
}
