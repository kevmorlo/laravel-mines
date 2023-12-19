<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\ProductStatusEnum;
use App\Models\Concession;

class ConcessionController extends Controller
{
    public function index(int $id) {
        $input = [
            'status' => ProductStatusEnum::Active

        ];
        $concession = Concession::find($id);
        return view('concession.show', ['concession'=>$concession]);
    }

    public function showAll() {
        $concession = Concession::all();
        return view('concession.show-all', ['concession'=>$concession]);
    }
    
    public function showFormeCreate() {
        return view('concession.create_concession');
    }

    public function create($request) {
        /*$concession = new Concession;
        $concession->name=$request->name;
        $concession->siret=$request->siret;
        $concession->licence=$request->licence;
        $concession->phone=$request->phone;
        $concession->saved;*/
        Concession::create($request->all());
        return view('concession.sucess');
    }
}
