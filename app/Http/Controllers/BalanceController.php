<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Member;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $balances=Balance::all();
        $members=Member::all();
        //return $balances[2]->dates;
        return view('balance.index', compact('balances', 'members'));
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
        //
        $newBalance=Balance::create([
            'dates'=> $request->thedate,
            'membersavings'=> $request->themembersavings,
            'entrancefees'=> $request->theentrancefee,
            'instalment'=> $request->theinstalment,
            'fines'=> $request->thefines,
            'shop'=> $request->theshop,
            'expendictures'=> $request->theexpenditure,
            'loan'=> $request->theloan,
            'balance'=> $request->thebalance,
            'comment'=> $request->thecomment,
        ]);
        
        if($newBalance){
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Balance $balance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Balance $balance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balance $balance)
    {
        //
        $balance=Balance::find($request->id);

        $balance->dates= $request->date;
        $balance->membersavings = $request->membersavings;
        $balance->entrancefees = $request->entrancefees;
        $balance->instalment = $request->instalment;
        $balance->fines = $request->fines;
        $balance->shop = $request->shop;
        $balance->expendictures = $request->expendictures;
        $balance->loan = $request->loan;
        $balance->balance = $request->balance;
        $balance->comment = $request->comment;
        

        $balance->save();
        
        if($balance){
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balance $balance, Request $request)
    {
        //
        $balance=Balance::find($request->id);
        $balance->delete();

        if($balance){
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }
    }
}
