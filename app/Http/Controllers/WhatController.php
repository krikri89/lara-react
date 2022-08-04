<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WhatController extends Controller
{
    public function colors()
    {
        $colors = session()->get('colors', []);

        return Inertia::render('Colors', [
            'niceColors' => $colors,
            'saveUrl' => route('save-colors')
        ]);
    }
    public function addColors(Request $request)
    {
        session()->get('colors', $request->all());

        return response()->json([
            'msg' => 'Saved'
        ]);
    }
}
