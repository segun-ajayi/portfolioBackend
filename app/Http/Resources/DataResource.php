<?php

namespace App\Http\Resources;

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Introduction;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'introduction' => new IntroductionResource(Introduction::first()),
                'about' => new AboutResource(About::first()),
                'education' => new EducationCollection(Education::all()),
                'skill' => new SkillCollection(Skill::all()),
                'social' => new SocialCollection(Social::all()),
                'portfolio' => new PortfolioCollection(Portfolio::all()),
                'experience' => new ExperienceCollection(Experience::all()),
            ]
        ];
    }
}
