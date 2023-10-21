<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donator;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Donation::select('*')->get();
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
