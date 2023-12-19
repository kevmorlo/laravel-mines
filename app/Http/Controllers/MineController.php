<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mine;
use App\Models\Concession;


class MineController extends Controller
{
    public function index(int $id) {
        $mine = mine::find($id);
        return view('mine.show', ['mine'=>$mine]);
        
    }
    public function showAll(int $id) {
        $concession = concession::find($id);
        $mine = mine::all();
        return view('mine.show-all', ['mine'=>$mine, 'concession'=>$concession]);
    }
}
