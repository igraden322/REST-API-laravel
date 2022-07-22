<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
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
            'company' => $this->company,
            'fullName' => $this->fullName,
            'photo' => $this->photo,
            'phone' => $this->phone,
            'id' => $this->id,
            'mail' => $this->mail,
            'birthDate' => $this->birthDate
        ];
    }
}
