<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
   
class DragDropController extends Controller
{
   
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function form()
    {
        return view('drag-drop-form');
    }
    
    /**
     * Image Upload Code
     *
     * @return void
     */
       public function uploadFiles(Request $request)
    {
        $image = $request->file('file');
   
        $imageName = time().'.'.$image->extension();
        $path = $image->store('public/images');
   
        return response()->json(['success'=>$imageName]);
    }
}