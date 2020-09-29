<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SeachController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Product::class, 'name')
            ->registerModel(Category::class, 'name')
            ->perform($request->input('query'));

        return view('search.results', compact('searchResults'));
    }
}
