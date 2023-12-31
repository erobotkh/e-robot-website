<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Category;
class ResourceController extends Controller
{
    public function index (){
        $categories = Category::all();
        // $resources = Resource::orderBy('created_at', 'desc')->paginate(6);
        $resources = Resource::filter(request(['search','filter','sort']))->paginate(6)->withQueryString();
        return view('AdminModules.Resource.index',compact('resources', 'categories'));
    }

    public function show(Resource $resource){
        return view('AdminModules.Resource.show',compact('resource'));
    }

    public function create(){
        $categories = Category::all();
        return view('AdminModules.Resource.create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required|string|max:5000',
            'category_id' => 'required',
            'sub_title' => 'required',
        ]);
        $extension = $request->file('image')->extension();
        $image_file = $request->file('image');
     
        try {
            $url = Storage::disk('do')->put(
                "erobot/post-content",
                $image_file,
               'public'
            );
       
        } catch (Exception $e) {
            // Handle upload error
            echo 'Failed to upload image: ' . $e->getMessage();
            dd($e->getMessage());
        }
        $currentDate = Date::now();
        $formattedDate = $currentDate->format('d F Y');
        $resource = new Resource();
        $resource->title = $request->title;
        $resource->description = $request->description;
        $resource->image = $url;
        $resource->sub_title = $request->sub_title;
        $resource->category_id = $request->category_id;
        $resource->date =   $formattedDate;
        $resource->save();
        return redirect()->route('admin.resource.index')->with('success','Resource created successfully!');
    }

    public function edit(Resource $resource){
        $categories = Category::all();
        return view('AdminModules.Resource.edit',compact('resource','categories'));
    }

    public function update(Resource $resource, Request $request){

        $data = $request->validate([
            'description' => 'required|string|max:5000',
            'title' => 'required',
            'category_id' => 'required',
            'sub_title' => 'required',
        ]);

        if($request->hasFile('image')){
          
            $image_file = $request->file('image');
         
            try {
                $url = Storage::disk('do')->put(
                    "erobot/post-content",
                    $image_file,
                   'public'
                );
           
            } catch (Exception $e) {
                // Handle upload error
                echo 'Failed to upload image: ' . $e->getMessage();
                dd($e->getMessage());
            }

            $data['image'] = $url;
        }

        $resource->update($data);
        
        return redirect()->route('admin.resource.index')->with('success','Resource updated successfully!');
    }

    public function destroy(Resource $resource){
        $resource->delete();
        return redirect()->route('admin.resource.index')->with('success','Resource deleted successfully!');
    }

    public function uploadCkEditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalExtension();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Define the directory path with the date
            $dirPath = 'uploads/articles_ckEditor/' . date('Y') . '/' . date('m') . '/' . date('d') . '/';

            // Create the directory if it doesn't exist
            if (!is_dir(public_path($dirPath))) {
@mkdir(public_path($dirPath), 0755, true);
            }

            // Move the file to the correct directory
            $request->file('upload')->move(public_path($dirPath), $fileName);

            // Generate a URL to the uploaded file
            $url = asset($dirPath . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
        return json_decode(json_encode($request->all()));
    }

}
