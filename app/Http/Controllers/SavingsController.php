<?php

namespace App\Http\Controllers;

use App\Saving;
use App\Member;
use Illuminate\Http\Request;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $savings=Saving::all();
        $members=Member::all();
        //return $balances[2]->dates;
        return view('savings.index', compact('savings', 'members'));
    }

    public function index2(Request $request)
    {
        $savings=Saving::all();
        $members=Member::all();

        //dd($request->members_name);
        $memberr=Member::find($request->members_name);
        //dd($member_savings);
        return view('savings.index', compact('savings', 'members', 'memberr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //Get the last balance for that member id
        $last_balance=Saving::where('member_id', $request->member_id)->last()->balance;

        Saving::create([
            'member_id'=> $request->memberid,
            'dates'=> $request->date,
            'particulars'=>$request->particulars,
            'deposit'=>$request->deposit,
            'withdrawal'=>$request->withdraw,
            //'balance'=>$request->withdrawal==null ? $last_balance;
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
