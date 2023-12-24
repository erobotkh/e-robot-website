<?php

namespace App\Http\Controllers;

use App\Models\MemberPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pos = DB::table('member_positions')->orderBy('id', 'desc')?->get();

        return view('AdminModules.Position.index', compact('pos'));
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
        $request->validate([
            'title' => 'required',
        ]);

        MemberPosition::create($request->post());
        return redirect()->route('position.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pos = DB::table('member_positions')->find($id);
        return view('AdminModules.Position.edit', compact('pos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MemberPosition::find($id)->update($request->all());
        return redirect()->route('position.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('member_positions')?->delete($id);
        return redirect()->route('position.index');
    }
}
