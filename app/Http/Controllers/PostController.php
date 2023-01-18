<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Post::latest()->with('category')->paginate(5);
        // return $data;

        // return view('posts.index',compact('data'));
        return view('posts.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::get();
        return view('posts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Categories::first();
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->except(['_token']);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        Post::create($input);

        // Post::insert([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'image' => $request->image,
        //     'category_id' => $request->categories()->attach($request->category_id),
        // ]);
    
        return redirect()->route('posts.index')
            ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $category = Categories::get();


        return view('posts.edit',compact('post','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'body' => 'required',
    //     ]);

    //     $post = Post::find($id);

    //     // $input = $request->except(['_token']);
    //     $input = $request->all();
    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $postImage);
    //         $input['image'] = "$postImage";
    //     }else{
    //         unset($input['image']);
    //     }
    
    //     // $post->update($input);
    //     $post->update($request->all());
    
    //     return redirect()->route('posts.index')
    //         ->with('success', 'Post updated successfully.');


    //         // $post = Post::find($id);
    //         // $post->title = $request->input('title');
    //         // $post->body = $request->input('body');
    
    //         // if($request->hasfile('image'))
    //         // {
    //         //     $destination = 'image/'.$post->image;
    //         //     if(File::exists($destination))
    //         //     {
    //         //         File::delete($destination);
    //         //     }
    //         //     $file = $request->file('image');
    //         //     $extention = $file->getClientOriginalExtension();
    //         //     $filename = time().'.'.$extention;
    //         //     $file->move('image/', $filename);
    //         //     $post->image = $filename;
    //         // }
    
    //         // $post->update();
    //         // return redirect()->back()->with('status','post Image Updated Successfully');
    // }





    public function update(Request $request , $id)
    {
   
            // find the post to update
            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            // $post->categroy_id = $request->input('category_id');

$input = $request->except(['_token']);
        $input = $request->all();

            // if there is an image with require move it and add it to $to_update variable
            if ($request->hasfile('image')) {
                $destination = 'image/'.$post->image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('image',$filename);
                $input['image'] = "$filename";
                // $post->image = $filename;
               
            }
            $post->update($input);

            return redirect()->route('posts.index')
                ->with('success', 'Post updated successfully.');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
    
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}