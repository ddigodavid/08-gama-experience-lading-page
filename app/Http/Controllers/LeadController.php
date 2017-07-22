<?php

namespace App\Http\Controllers;

use App\Model\Lead;
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