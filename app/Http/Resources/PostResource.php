<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    //define property
    public $status;
    public $message;
    public $resource;

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * $param \Illuminate\Http\Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}
