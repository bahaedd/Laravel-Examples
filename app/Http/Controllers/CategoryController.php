<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();

        return view('Category.index', compact('categories'));
    }

    public function subcat(Request $request)
    {
        $parent_id = $request->cat_id;

        $subcats = Category::where('id', $parent_id)->with('subcategories')->get();

        return response()->json([
            'subcategories' => $subcats
        ]);
    }
}
