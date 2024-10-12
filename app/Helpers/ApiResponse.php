<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public static function response(string $status, string $message, $data = [], $statusCode = 200): JsonResponse
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json(
            $response,
            $statusCode,
            [
                'Content-Type'                          => 'application/json; charset=utf-8',
                'Access-Control-Allow-Credentials'      => 'true',
                'Access-Control-Allow-Origin'           => '*',
                'Access-Control-Allow-Methods'          => 'GET, POST, OPTIONS',
                'Access-Control-Allow-Headers'          => 'Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With,X-Api-Version'
            ],
            JSON_UNESCAPED_UNICODE
        );
    }

    public static function responseSuccess(string $message, $data = [], $statusCode = 200): JsonResponse
    {
        return self::response('success', $message, $data, $statusCode);
    }

    public static function responseError(string $message, $data = [], $statusCode = 404): JsonResponse
    {
        return self::response('error', $message, $data, $statusCode);
    }
}
