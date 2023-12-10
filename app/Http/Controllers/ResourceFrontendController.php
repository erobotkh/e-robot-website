<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Category;
class ResourceFrontendController extends Controller
{
    public function index()
    {
        $resources = Resource::orderBy('created_at', 'desc')->paginate(8);
        return view('resource.index',compact('resources'));
    }

    public function show(Resource $resource){
        $related_resources = Resource::where('category_id', $resource->category_id)->where('id', '!=', $resource->id)->orderBy('created_at', 'desc') ->limit(3)->get();
        return view('resource.show',compact('resource','related_resources'));
    }
}
