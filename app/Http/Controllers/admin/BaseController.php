<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected function responseSuccess($message = null, $data = null, $status = 200)
    {
        return \Response::json([
            'success' => true,
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }

    protected function responseError($message = null, $errors = null, $status = 500)
    {
        return \Response::json([
            'success' => false,
            'status' => $status,
            'message' => $message,
            'data' => $errors
        ]);
    }
}
