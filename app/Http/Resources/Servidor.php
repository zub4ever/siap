<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Servidor extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'matricula' => $this->matricula,
            'nm_servidor' => $this->nm_servidor
        ];

    }
}
