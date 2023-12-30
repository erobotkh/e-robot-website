<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = DB::table('teams')->orderBy('id', 'desc')->get();
        return view('AdminModules.Team.index', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'cover'=>'required|image|max:10240',
            'bio'=>'required'
        ]);
        $image_file = $request->cover;
        $url = Storage::disk('do')->putFile(
            "erobot/team",
            $image_file,
            'public'
        );
        $data=Team::create(['name'=>$request->name,'cover'=>$url,'bio'=>$request->bio]);


        // $team->save();
        return redirect()->route('team.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = DB::table('teams')->find($id);
        return view('AdminModules.Team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Team::find($id)->update($request->all());
        $this->validate($request,[
            'name'=>'required',
            'bio'=>'required'
        ]);
        $cover = $request->cover;
        if($cover){
            $url = Storage::disk('do')->putFile(
                "erobot/team",
                $cover,
                'public'
            );
        }else{
            $url = $request->old_cover;
        }
        $data=Team::find($id)->update(['name'=>$request->name,'cover'=>$url,'bio'=>$request->bio]);

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('teams')->delete($id);
        return redirect()->route('team.index', compact('data'));
    }
}
