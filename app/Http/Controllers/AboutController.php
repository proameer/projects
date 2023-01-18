<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:about', ['only' => ['index', 'show']]);
         $this->middleware('permission:about', ['only' => ['create', 'store']]);
         $this->middleware('permission:about', ['only' => ['edit', 'update']]);
         $this->middleware('permission:about', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = About::latest()->paginate(5);
        // return $data;

        // return view('posts.index',compact('data'));
        return view('about.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = About::get();
        return view('about.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = About::first();
        $this->validate($request, [
            'name' => 'required',
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

        About::create($input);

    
        return redirect()->route('about.index')
            ->with('success','About created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::find($id);

        return view('about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = About::find($id);


        return view('about.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request , $id)
    {
   
            // find the post to update
            $post = About::find($id);
            $post->name = $request->input('name');
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

            return redirect()->route('about.index')
                ->with('success', 'About updated successfully.');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
    
        return redirect()->route('about.index')
            ->with('success', 'About deleted successfully.');
    }
}