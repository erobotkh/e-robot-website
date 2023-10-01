<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Resource::paginate(5)->withQueryString();
        return view('AdminModules.resource.index',[
            'resources' => $resources
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminModules.resource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
        ]);
    
        $imageName = time() . '.' . $request->file('image')->extension();
        // $request->file('image')->storeAs('public/images', $imageName);
    
        $resource = new Resource();
        $resource->title = $request->get('title');
        $resource->description = $request->get('description');
        $resource->image = $imageName;
        $resource->category = $request->get('category');
        $image = $request->file('image');
        $resource->save();

        // Upload the image to S3.
        Storage::disk('s3')->put($imageName, $image);

        // Flash a success message to the product details page.
        // flash('success', 'The product has been created successfully.');             
        session()->flash('success', 'The resource has been created successfully.');
        return redirect()->route('resource.create');
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
    public function edit(Resource $resource)
    {
        return view('AdminModules.resource.edit',['resource' => $resource]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
        ]);
    
        $resource->title = $request->get('title');
        $resource->description = $request->get('description');
        $resource->category = $request->get('category');

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $request->file('image')->extension();
            $resource->image = $imageName;
            // $request->file('image')->storeAs('public/images', $imageName);
            Storage::disk('s3')->put($imageName, $image);
        }
    
        $resource->save();
    
        // Flash a success message to the resource details page.
        session()->flash('success', 'The resource has been updated successfully.');
    
        return back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect('/resource')->with('success','resource deleted successfully');
    }
}
