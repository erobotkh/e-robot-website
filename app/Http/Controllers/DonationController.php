<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Donation::select('*')->orderBy('id',"desc")->get();
        $donator = Donator::orderBy('id', 'DESC')->get();

        if(empty($donator)){
            $donator = new Donator();
        }
        if(empty($info)){
            $info = new Donation();
        }

        return view('donation',compact('info','donator'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "acc_number"=> "required|min:8|max:20",
            "acc_type"=>"required",
            "qr_code"=> "required|image|mimes:jpeg,jpg,png",
            "recipient_name"=> "required|min:3|max:30",
            "recipient_position"=> "required|min:5|max:50",
        ]);
        $qr_code = $request->file("qr_code");
        $url=" ";
        if($qr_code){
            // $new_qr_code = time() .".". $qr_code->getClientOriginalName();
            // $path ='images/';
            // $qr_code->move($path, $new_qr_code);
            $url = Storage::disk('do')->putFile(
                "erobot/donation-qr_code",
                $qr_code,
                'public'
            );
        }
        $acc_type = $request->acc_type;
        if($acc_type=="dollar"){
            $currency_symbol = "$";
        }else{
            $currency_symbol = "៛";
        }

        $donation = Donation::create([
            "acc_number"=> $request->acc_number,
            "acc_type"=> $acc_type,
            "currency_symbol"=> $currency_symbol,
            // "qr_code"=> '/'.$path.$new_qr_code,
            "qr_code"=> $url,
            "recipient_name"=> $request->recipient_name,
            "recipient_position"=> $request->recipient_position,
        ]);

        if(empty($donation)){
            return redirect("/admin/donation")->with("error","");
        }else{
            return redirect("/admin/donation")->with("create_success","");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $CardInfo = Donation::select()->orderBy("id","desc")->get();
        if(empty($CardInfo)){
            $CardInfo = new Donation();
        }
        return view("AdminModules.DonationCard.index",compact("CardInfo"));
    }
    public function delete(Request $request ){

        $remove_id = $request->remove_id;
        $del_qr_code = Donation::find($remove_id)->delete();

        if(empty($del_qr_code)){
            return redirect("/admin/donation")->with("error","");
        }else{

            return redirect("/admin/donation")->with("delete_success","");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            "acc_number"=> "required|min:8|max:20",
            "acc_type"=>"required",
            "qr_code"=> "required|image|mimes:jpeg,jpg,png",
            "recipient_name"=> "required|min:3|max:30",
            "recipient_position"=> "required|min:5|max:50",
        ]);
        $qr_code = $request->file("qr_code");

        $url=" ";
        if(empty($qr_code)){
            $url = $request->old_qr_code;
        }else{
            $new_qr_code = time() .".". $qr_code->getClientOriginalName();

            $url = Storage::disk('do')->putFile(
                "erobot/donation-qr_code",
                $qr_code,
                'public'
            );
        }


        $acc_type = $request->acc_type;
        if($acc_type=="dollar"){
            $currency_symbol = "$";
        }else{
            $currency_symbol = "៛";
        }
        $donation = Donation::find($request->update_id)->update([
            "acc_number"=> $request->acc_number,
            "acc_type"=> $acc_type,
            "currency_symbol"=> $currency_symbol,
            "qr_code"=> $url,
            "recipient_name"=> $request->recipient_name,
            "recipient_position"=> $request->recipient_position,
        ]);

        if(empty($donation)){
            return redirect("/admin/donation")->with("error","");
        }else{
            return redirect("/admin/donation")->with("update_success","");
        }
    }


}
