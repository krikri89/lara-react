<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WhatController extends Controller
{
    public function colors()
    {
        $colors = ["crimson", "skyblue", "pink"];

        return Inertia::render('Colors', [
            'niceColors' => $colors,
        ]);
    }
}
