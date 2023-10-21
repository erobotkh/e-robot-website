<?php

namespace App\Http\Controllers;

use App\Models\achievment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievment = achievment::OrderBy('id','desc')->first();
        if(empty($achievment)) {
            $achievment = new achievment();
            $achievment->num_intership=0;
            $achievment->num_member=0;
            $achievment->num_intership=0;
            $achievment->num_province=0;
            $achievment->num_social_impact= 0;
            $achievment->num_student= 0;
            $achievment->num_project= 0;
        }

        return view("home", compact("achievment"));
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
    public function show(achievment $achievment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(achievment $achievment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, achievment $achievment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(achievment $achievment)
    {
        //
    }
}
