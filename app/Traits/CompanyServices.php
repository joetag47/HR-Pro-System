<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait CompanyServices
{
    public function successResponse($message)
    {
        return response()->json([
            'code' => 200,
            'msg' => $message
        ]);
    }

    public function failureResponse($message)
    {
        return response()->json([
            'code' => 401,
            'msg' => $message
        ]);
    }

    public function logCompanyServiceInfo($title, $data)
    {
        Log::channel('company_service')->alert($title, ['message' => $data]);
    }
}
