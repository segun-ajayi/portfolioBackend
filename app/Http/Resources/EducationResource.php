<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            'college' => $this->college,
            'degree' => $this->degree,
            'duration' => $this->duration,
            'text' => $this->text,
            'order' => $this->order,
        ];
    }
}
