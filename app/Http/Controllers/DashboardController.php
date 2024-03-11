<?php

namespace App\Http\Controllers;
use App\Models\Addresses;
use App\Models\ProfileImg;
use App\Models\UserDobs;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserWorkType;
use App\Models\UserWT;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        addJavascriptFile('JS/multi.js');
        
        return view('pages.dashboards.index');
    }
}
