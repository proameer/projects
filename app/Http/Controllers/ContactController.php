<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:contact', ['only' => ['index', 'show']]);
         $this->middleware('permission:contact', ['only' => ['create', 'store']]);
         $this->middleware('permission:contact', ['only' => ['edit', 'update']]);
         $this->middleware('permission:contact', ['only' => ['destroy']]);
    }
    /* * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
       $data = Contact::latest()->paginate(5);

       return view('contact.index',compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
//    public function create()
//    {
//        return view('contact.create');
//    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required',
//            'subject' => 'required',
//            'message' => 'required',
//        ]);
//        $input = $request->except(['_token']);
   
//        Contact::create($input);
   
//        return redirect()->route('contact.index')
//            ->with('success','Category created successfully.');
//    }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $contact = Contact::find($id);

       return view('contact.show', compact('contact'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
//    public function edit($id)
//    {
//        $contact = Contact::find($id);

//        return view('contact.edit',compact('contact'));
//    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        $this->validate($request, [
//         'name' => 'required',
//         'email' => 'required',
//         'subject' => 'required',
//         'message' => 'required',
//        ]);

//        $category = Contact::find($id);
   
//        $category->update($request->all());
   
//        return redirect()->route('contact.index')
//            ->with('success', 'category updated successfully.');
//    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Contact::find($id)->delete();
   
       return redirect()->route('contact.index')
           ->with('success', 'category deleted successfully.');
   }
}
