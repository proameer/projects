<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SocialController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:social-media', ['only' => ['index', 'show']]);
         $this->middleware('permission:social-media', ['only' => ['create', 'store']]);
         $this->middleware('permission:social-media', ['only' => ['edit', 'update']]);
         $this->middleware('permission:social-media', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Social::latest()->with('logo')->paginate(5);
        // return $data;

        // return view('posts.index',compact('data'));
        return view('social.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Logo::get();
        return view('social.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Logo::first();
        $this->validate($request, [
            // 'name' => 'required',
            'link' => 'required',
        ]);
        $input = $request->except(['_token']);

        Social::create($input);

        return redirect()->route('social.index')
            ->with('success','Social Media created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Social::find($id);

        return view('social.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Social::find($id);
        $category = logo::get();


        return view('social.edit',compact('post','category'));
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
            $post = Social::find($id);
            // $post->name = $request->input('name');
            $post->link = $request->input('link');
            $post->logo_id = $request->input('logo_id');

$input = $request->except(['_token']);
        $input = $request->all();

    
            $post->update($input);

            return redirect()->route('social.index')
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
        Social::find($id)->delete();
    
        return redirect()->route('social.index')
            ->with('success', 'Post deleted successfully.');
    }
}