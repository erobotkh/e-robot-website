<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Subject;
use App\Models\Lesson;
use App\Models\LessonDetail;
use Validator;
use Illuminate\Support\Facades\Storage;
class EducationController extends Controller
{
    public function createEducation(Request $request){
        
        $rules = [
            'title'=>'required',
            'description'=>'required',
            'icon'=>'required|image|max:10240',
            
            'begin_color'=>'required',
            'end_color'=>'required',
        ];
        $input = $request->only('title','description','icon','begin_color','end_color');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Create Fail.", $validator->messages());
        }
        $icon = $request->icon;
        $url = Storage::disk('do')->putFile(
            "erobot/icon",
            $icon,
            'public'
        );
        $data=Education::create(['title'=>$request->title,'description'=>$request->description,'icon'=>$url,'begin_color'=>$request->begin_color,'end_color'=>$request ->end_color]);
        
        if($data){
            return $this->sendResponse($data, 'Create Success!');
        }else{
            return $this->sendError("Create Faild.", $validator->messages());
        }
    }
    public function showEducation(){
        $data=Education::all();
        if($data){
            return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
        }
    }

    public function createSubject(Request $request){
        
        $rules = [
            'title'=>'required',
            'description'=>'required',
            'education_id'=>'required',
            'icon'=>'required|image|max:10240',
            'begin_color'=>'required',
            'end_color'=>'required',
        ];
        $input = $request->only('title','description','icon','education_id','begin_color','end_color');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Create Fail.", $validator->messages());
        }
        $icon = $request->icon;
        $url = Storage::disk('do')->putFile(
            "erobot/icon",
            $icon,
            'public'
        );
        $data=Subject::create(['title'=>$request->title,'description'=>$request->description,'is_enable'=>1,'education_id'=>$request->education_id,'icon'=>$url,'begin_color'=>$request->begin_color,'end_color'=>$request ->end_color]);
        
        if($data){
            return $this->sendResponse($data, 'Create Success!');
        }else{
            return $this->sendError("Create Faild.", $validator->messages());
        }
    }
    public function showSubject(){
        $data=Subject::all();
        if($data){
            return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
        }
    }
    public function createLesson(Request $request){
        
        $rules = [
            'title'=>'required',
            'subject_id'=>'required',
            
        ];
        $input = $request->only('title','subject_id');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Create Fail.", $validator->messages());
        }
        
        $data=Lesson::create(['title'=>$request->title,'subject_id'=>$request->subject_id]);
        
        if($data){
            return $this->sendResponse($data, 'Create Success!');
        }else{
            return $this->sendError("Create Faild.", $validator->messages());
        }
    }
    public function showLesson(){
        $data=Lesson::all();
        if($data){
            return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
        }
    }
    public function createLessonDetail(Request $request){
        
        $rules = [
            'title'=>'required',
            'lesson_id'=>'requires',
            'header'=>'required',
            'image_type'=>'nullable',
            'image'=>'nullable',
            'body'=>'nullable',
            'sub_body'=>'nullable',
            'conclusion'=>'nullable'
        ];
        $input = $request->only('title','lesson_id','header','image_type','image','body','sub_body','conclusion');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Create Fail.", $validator->messages());
        }
        
        $data=LessonDetail::create(
            [
        'title'=>$request->title,
        'lesson_id'=>$request->lesson_id,
        'header'=>$request->header,
        'image_type'=>$request->image_type,
        'image'=>$request->image,
        'body'=>$request->body,
        'sub_body'=>$request->sub_body,
        'conclusion'=>$request->conclusion]);
        
        if($data){
            return $this->sendResponse($data, 'Create Success!');
        }else{
            return $this->sendError("Create Faild.", $validator->messages());
        }
    }
    public function showLessonDetail(){
        $data=LessonDetail::all();
        return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
        
    }
}
