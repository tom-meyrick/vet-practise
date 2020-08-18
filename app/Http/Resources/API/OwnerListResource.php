<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
// use App\Owner;

class OwnerListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id, 
            "name" => $this->fullName()
        ]; 
    }
}
