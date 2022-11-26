<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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

    public function performUpload($file, $path)
    {
        $file_name = Str::random(15).'.'.$file->getClientOriginalExtension();

        $abs_path = storage_path("app/public/$path");

        $file->move($abs_path, $file_name);

        $path = "storage/$path" . $file_name;

        return $path;
    }
}
