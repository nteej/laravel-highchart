<?php
namespace App\Traits;
use Illuminate\Http\JsonResponse;

trait ResponseTrait
{
    protected $statusCode = 200;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @param $status
     * @param $response
     * @param $message
     * @return JsonResponse
     */
    public function jsonResponse($status, $response, $message)
    {
        $chartResponse = array(
            "status" => $status,
            "response" => $response,
            "message" => $message
        );
        return response()->json($chartResponse)->setEncodingOptions(JSON_NUMERIC_CHECK);
    }

}