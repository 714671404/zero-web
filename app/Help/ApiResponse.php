<?php
namespace App\Help;

use Illuminate\Http\Response;

trait ApiResponse
{
    protected $statusCode = 200;

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function response(array $data)
    {
        dd(response()->json($data));
    }
}