<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * get all categories
     * GET - /api/categories
     * @param category
     */
    public function index()
    {
        try {
            // throw new Exception('This is error');
            return Category::all();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }
}
