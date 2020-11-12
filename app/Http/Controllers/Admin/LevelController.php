<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Level;
use Ramsey\Uuid\Uuid;

class LevelController extends Controller
{
    public function index(){

        $level = Level::orderBy('created_at')->get();

        return view('admin.level', compact('level'));
    }

    public function input(Request $request){
        $level = new Level;
        $level->id = Uuid::uuid4()->toString();
        $level->level_name = $request->level_name;

        $level->save();

        alert()->success('Completed', 'Level Has Been Added');
        return redirect()->to('/admin/level');
    }
}
