<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ApiResponse;

class ProductController extends Controller
{
    public function index()
    {
        return ApiResponse::responseSuccess('Success', [], 200);
    }

    public function store() {}

    public function update() {}

    public function delete() {}
}
