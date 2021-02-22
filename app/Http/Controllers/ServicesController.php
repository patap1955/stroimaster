<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(Service $service)
    {
        return view('pages.services', compact('service'));
    }
}
