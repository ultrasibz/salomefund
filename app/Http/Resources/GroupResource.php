<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'start_on' => $this->start_on,
            'end_on' => $this->end_on,
            'is_open' => $this->is_open,
            'total_deposits' => $this->total_deposits ?? 0,
            'total_loans' => $this->total_loans ?? 0,
            'total_net_deposits' => $this->total_net_deposits ?? 0,
            'total_net_loans' => $this->total_net_loans ?? 0,
        ];
    }
}
