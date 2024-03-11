<?php

namespace App\Http\Controllers;

use App\Models\UserEducation;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.dashboards.user1');
    }
}
