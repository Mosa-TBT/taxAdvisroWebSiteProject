<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('service_details', compact('service'));
    }

}
