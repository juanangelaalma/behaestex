<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CVResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'id' => $this->id,
                'avatar' => $this->avatar,
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'summary' => $this->summary,
                'address' => $this->address,
                'workExperiences' => WorkExperienceResource::collection($this->workExperiences),
                'educations' => EducationResource::collection($this->educations),
                'skills' => SkillResource::collection($this->skills),
            ]
        ];
    }
}
