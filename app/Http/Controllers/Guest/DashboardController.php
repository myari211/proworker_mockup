<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $special = DB::table('specializations')->join('categories', 'specializations.category_name', '=', 'categories.id')->paginate(3);

        return view('guest.dashboard', compact('special'));
    }
}
