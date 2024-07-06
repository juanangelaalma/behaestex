<?php

namespace App\Http\Controllers;
use App\Http\Resources\CVResource;
use App\Models\User;

class CVController extends Controller
{
    public function getFullCV() {
        return new CVResource(User::get()->first());
    }
}
