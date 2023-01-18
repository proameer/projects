<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;


class CategoriesController extends Controller
{
   /**
     * create a new instance of the class
     *
     * @return void
     */
   function __construct()
   {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
       $data = Categories::latest()->paginate(5);

       return view('categories.index',compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     
       return view('categories.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
           'nameCategory' => 'required',
       ]);
       $input = $request->except(['_token']);
   
       Categories::create($input);
   
    //    return redirect()->route('categories.index')
    //        ->with('success','Category created successfully.');
    return redirect()->route('categories.index')->with('success','Data added Successfully');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $category = Categories::find($id);

       return view('categories.show', compact('category'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $category = Categories::find($id);

       return view('categories.edit',compact('category'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $this->validate($request, [
           'nameCategory' => 'required',
       ]);

       $category = Categories::find($id);
   
       $category->update($request->all());
   
       return redirect()->route('categories.index')
           ->with('success', 'category updated successfully.');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Categories::find($id)->delete();
   
       return redirect()->route('categories.index')
           ->with('success', 'category deleted successfully.');
   }
}
