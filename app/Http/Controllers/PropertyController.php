<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        return view('show', [
            'house' => Property::all(),
        ]);
    }

    public function create(){
        return view('create', [
            'house' => Property::all(),
        ]);
    }

    public function store(Request $request){
        //dump($request->name);

        $house = new Property();
        $house->title = $request->title;
        $house->description = $request->description;
        $house->price = $request->price;
        $house->save();

        return redirect()->route('home');
    }
}
