<?php

namespace App\Http\Controllers;

use App\Imports\donatorImportByExcel;
use App\Models\Donator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class DonatorController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->file('donatorExcel')){
            Excel::import(new donatorImportByExcel, $request->file('donatorExcel'));

        }else{
            Donator::create([
                "name"=> $request->add_name,
                "amount"=> $request->add_amount,
                "currency_type"=> $request->add_currency,
            ]);
        }



        return back()->with("create_success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if($request->type){
            $allDonator = Donator::where("currency_type",$request->type)->get();

        }else{
            $allDonator = Donator::all();

        }

        return view("AdminModules.Donator.index",compact("allDonator"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->update_currency_type);

        $donator= Donator::find($request->update_id)->update([
            "name"=> $request->name,
            "amount"=> $request->amount,
            "currency_type"=> $request->update_currency_type
        ]);
        return redirect()->back()->with("update_success","");
    }

    public function delete(Request $request, Donator $donator)
    {
        $donator= Donator::find($request->remove_id)->delete();
        return redirect()->back()->with("delete_success","");
    }


}
