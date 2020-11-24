<?php

namespace App\Http\Controllers;

use App\Add_Information;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class MaterialController extends Controller
{
    //
    public function store(Request $request){
        $material=Add_Information::create([
            'item_no'=>$request['item'],
            'brief_description_of_good_or_related_service'=>$request['description'],
            'BID'=>$request['bid'],
            'user_id'=>auth()->user()->id,
        ]);
        $materials=Add_Information::all();
        return view('material.view',compact('materials'));
    }
    public Function index(){
        $materials=Add_Information::all();
        return view('material.view',compact('materials'));
    }
}
