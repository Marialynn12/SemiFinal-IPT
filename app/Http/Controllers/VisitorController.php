<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.visitor_list');
    }


    public function create()
    {
        //
        return view('pages.create_visitor');
    }


    public function store(Request $request)
    {

        Visitor::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'purpose' => $request->purpose,
            'time' => $request->time,
        ]);


        return redirect('create-visitor')->with(['success' => 'New Visitor created successfully']);
    }


    public function show()
    {
        $visitors = Visitor::all();

        return view('pages.visitor_list',['visitors'=>$visitors]);

    }
}
