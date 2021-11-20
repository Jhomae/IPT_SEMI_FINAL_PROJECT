<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investor;

class InvestorController extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.investor_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create_investor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $investors = new Investor();

        $investors->name = $request->name;
        $investors->address = $request->address;
        $investors->phone = $request->phone;
        $investors->investment = $request->investment;

        $investors->save();

        return redirect('create-investor')->with(['success' => 'New Investor created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $investorList = Investor::all();

        return view('pages.investor_list',['investorList'=>$investorList]);

    }
}
