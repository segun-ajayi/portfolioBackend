<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
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
            'icon' => $this->icon,
            'company' => $this->company,
            'position' => $this->position,
            'duration' => $this->duration,
            'text' => $this->text,
            'order' => $this->order,
        ];
    }
}
