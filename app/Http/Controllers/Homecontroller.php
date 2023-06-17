<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class Homecontroller extends Controller
{
   public function index()
    {
        $post=Post::all();
        return view('home.index',compact('post'));
    }
    
    function upload(Request $request)
    {
       $data=new Post ;

       $data->username=Auth::user()->name;


       $data->description=$request->Description;

       $image=$request->uploadimage;

        if($image)
        {

       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->uploadimage->move('post',$imagename);

       $data->image=$imagename;
        }

       $data->save();
       return redirect()->back();
    }
    function viewpost()
    {
        $name=Auth::user()->name;
        $post=Post::where('username','=',$name)->get();

        return view('post_page',compact('post'));

    }

    function delete_post($id)
    {
      $data=post::find($id);

      $data->delete();
      return redirect()->back();
    }

    function update_post($id)
    {
      $data=post::find($id);
      return view('updatepost',compact('data'));
    }

   function confirm_update(Request $request, $id)
   {
      $post=post::find($id);


      $post->description=$request->Description;



       $image=$request->uploadimage;

        if($image)
        {

       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->uploadimage->move('post',$imagename);

       $post->image=$imagename;
        }

        $post->save();

        return redirect()->back();


   }

}
