<?php

namespace App\Http\Controllers;

use App\Requests;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create(Request $data)
    {
        $req = Requests::create([
            'item_no' => $data->item,
            'brief_description' => $data->description,
            'BId' => $data->bid,
            'user_id' => auth()->user()->id
        ]);
        $req->save();
        return view('material.view');
    }
}
