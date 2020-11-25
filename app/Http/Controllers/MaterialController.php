<?php

namespace App\Http\Controllers;

use App\MaterialInformation;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class MaterialController extends Controller
{
    //
    public function store(Request $request){
        $material=MaterialInformation::create([
            'item_no'=>$request['item'],
            'brief_description_of_good_or_related_service'=>$request['description'],
            'BID'=>$request['bid'],
            'user_id'=>auth()->user()->id,
        ]);
        $materials=MaterialInformation::all();
        return view('material.view',compact('materials'));
    }
    public Function index(){
        $materials=MaterialInformation::all();
        return view('material.view',compact('materials'));
    }
}
