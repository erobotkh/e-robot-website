<?php

namespace App\Http\Controllers;

use App\Http\Resources\BaseHttpResponse;
use App\Traits\ApiResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ApiResponse;

    protected $service;
    protected $model;

    public function dataTable(Request $request, $query = null): JsonResponse
    {
        $attributes = $request->all();
        return $this->success($this->service->getData($attributes, $query));
    }

    public function all(): JsonResponse
    {
        return $this->success($this->service->getList());
    }

    public function allRequest(Request $request, $query = null): JsonResponse
    {
        return $this->success($this->service->getList());
    }
    
}
