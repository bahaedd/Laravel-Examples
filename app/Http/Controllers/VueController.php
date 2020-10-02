<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function index()
    {
        return view('validation.vue');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comments' => 'required'
        ]);

        return response()->json(['success'=> 'Added !']);
    }
}
