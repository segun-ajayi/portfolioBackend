<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'nationality' => $this->nationality,
            'profile' => $this->profile,
            'resume' => $this->resume,
        ];
    }
}
