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
           $add_donator = Excel::import(new donatorImportByExcel, $request->file('donatorExcel'));

        }else{
            $this->validate($request, [
                "add_name"=> "required",
                "add_amount"=> "required",
                "add_currency"=> "required",
            ]);
            $add_donator = Donator::create([
                "name"=> $request->add_name,
                "amount"=> $request->add_amount,
                "currency_type"=> $request->add_currency,
            ]);
        }

        if($add_donator){
            return redirect('/admin/donator')->with("create_success","");
        }else{
            return redirect('/admin/donator')->with("error","");

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $currency = $request->type;
            $page = $request->page;

        //  else {
        //     $page = 1;
        // }

        if($request->type){
            $total_donator = Donator::where('currency_type',$currency)->count();
            $total_page = ceil($total_donator / 6);

            if($page > $total_page){
                $page = 1;
            }

            $rs_page = ($page - 1) * 6;
            $allDonator = Donator::select('name','amount','currency_type')->where('currency_type', $currency)->limit(6)->offset($rs_page)->get();

            // $allDonator = Donator::where("currency_type",$request->type)->get();

        }else{
            $total_donator = Donator::count();
            $total_page = ceil($total_donator / 6);
            $rs_page = ($page - 1) * 6;
            $allDonator = Donator::select('name','amount','currency_type')->limit(6)->offset($rs_page)->get();

            // $allDonator = Donator::select('name','amount','currency_type')->paginate(6)->withQueryString();

        }

        return view("AdminModules.Donator.index",compact("allDonator","total_page","currency","page"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            "name"=> "required",
            "amount"=> "required",
            "update_currency_type"=> "required",
        ]);

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
