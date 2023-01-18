<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;


class LogoController extends Controller
{
   /**
     * create a new instance of the class
     *
     * @return void
     */
   function __construct()
   {
        $this->middleware('permission:logo', ['only' => ['index', 'show']]);
        $this->middleware('permission:logo', ['only' => ['create', 'store']]);
        $this->middleware('permission:logo', ['only' => ['edit', 'update']]);
        $this->middleware('permission:logo', ['only' => ['destroy']]);
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
       $data = Logo::latest()->paginate(5);

       return view('logo.index',compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     
       return view('logo.create');
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
           'nameClass' => 'required',
       ]);
       $input = $request->except(['_token']);
   
       Logo::create($input);
   
       return redirect()->route('logo.index')
           ->with('success','logo created successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $logo = Logo::find($id);

       return view('logo.show', compact('logo'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $logo = Logo::find($id);

       return view('logo.edit',compact('logo'));
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
           'nameClass' => 'required',
       ]);

       $logo = Logo::find($id);
   
       $logo->update($request->all());
   
       return redirect()->route('logo.index')
           ->with('success', 'logo updated successfully.');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Logo::find($id)->delete();
   
       return redirect()->route('logo.index')
           ->with('success', 'logo deleted successfully.');
   }
}
