<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Redirect;

class LeadController extends Controller
{

    public function capture(Request $request)
    {
        $data = $request->all();

        Lead::create($data);

        return Redirect::route('home');
    }

}