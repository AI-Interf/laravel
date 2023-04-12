<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SearchData;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $userId = Auth::user()->id;

        $show = Order::where('user_id',$userId)->where('payment_type', 'Paid')->first();

        $data = SearchData::where('user_id',$userId)->count();

        return view('search.create', compact("data", "show"));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'search_data' => 'required',       
        ]);
        
        $search = new SearchData;
        $search->search_data = $request->search_data;
        $search->user_id = $request->user()->id;

        $search->save();

        return redirect()->back()->with('success','Data has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show()
    {

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit()
    {
        
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request)
    {

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy()
    {

    }
}
