<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function capture(Request $request)
    {
        $data = $request->all();

        Lead::create($data);

        return view('welcome');
    }

}