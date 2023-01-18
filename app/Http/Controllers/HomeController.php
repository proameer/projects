<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;
use App\Models\About;
use App\Models\Contact;
use App\Models\User;
use App\Models\Social;
use App\helpers;
Use DB;
use Carbon\Carbon;
use Share;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Post::all()->random(1);
        $posts = Post::inRandomOrder()->limit(5)->get();
        $category = Categories::get();
        $latestPost = Post::orderBy('created_at' , 'desc')->take(4)->get();
        // $latestPost = Post::orderBy('id' , 'desc')->take(5)->get();
        $latestPostOnly = Post::orderBy('created_at' , 'desc')->take(1)->get();
        $postByCategory = Post::with('category')->inRandomOrder()->limit(4)->get();

        $shareSocial = Share::currentPage($posts[0]->title)
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();

        $slider = Post::inRandomOrder()->limit(10)->get();
        return view('index' , compact('post' , 'posts' , 'category', 'latestPost','latestPostOnly','postByCategory','shareSocial','slider'));
    }

    public function categoryName($id){
        $category = Categories::findOrFail($id);
        $categoryname = Categories::get();
        $post = Post::with('category')->where('category_id' , $id)->get();
        // return $post;
        $latestPost = Post::orderBy('created_at' , 'desc')->take(3)->get();
        // return $post[0]->title;
        return view('category' , compact('category','categoryname' ,'post','latestPost'));
    }

    public function singleCategory($id){
        $posts = Post::findOrFail($id);
        $category = Categories::all();
        $postByCategory = Post::with('category')->where('category_id' , $posts->category_id)->take(4)->get();
        $latestPost = Post::latest()->take(3)->get();
        
        $shareSocial = Share::currentPage($posts->title)
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();
        // return $posts;
        return view('single-category' , compact('posts','category','postByCategory','latestPost' , 'shareSocial'));
    }

    public function aboutus(){
        $about = About::latest()->get();
        // dd($about);
        // return $about;
        return view('aboutus', compact('about'));
    }

    public function contactus(){
 
        return view('contactus')->with(['done'=>0]);
    }

    public function contactStore(Request $request){
        $validate =  $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ],[
            'name.required'=>'هذا الحقل مطلوب',
            'email.required'=>'هذا الحقل مطلوب',
            'email.email'=>'يجب وضع علامة @',
            'subject.required'=>'هذا الحقل مطلوب',
            'message.required'=>'هذا الحقل مطلوب',
         ]);

         if($validate>0){
  //  Store data in database
  Contact::create($request->all());
  // 
  return back()->with(['success'=> 'We have receiv','done'=>1]);  
         }
        
    }

    public function footer(){
        $about = About::all();
        return view('navbar' , compact('about'));
    }

    public function lineChart()
    {
        $data['lineChart'] = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("MONTHNAME(created_at) as month_name"),\DB::raw('max(created_at) as createdAt'))
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->orderBy('createdAt')
        ->get();
 
        return view('lineChart', $data);
        // return view('chartJs', $data);
    }

    public function barChart()
    {
        $record = Post::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
    ->where('created_at', '>', Carbon::today()->subDay(6))
    ->groupBy('day_name','day')
    ->orderBy('day')
    ->get();
  
     $data = [];
 
     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }
 
    $data['chart_data'] = json_encode($data);
    return view('barChart', $data);
     
    }

    public function chartjs()
    {
        $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
    ->where('created_at', '>', Carbon::today()->subDay(6))
    ->groupBy('day_name','day')
    ->orderBy('day')
    ->get();
  
     $data = [];
 
     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }
 
    $data['chart_data'] = json_encode($data);
    return view('chartJs', $data);
     
    }

    public function shareSocialMedia(){
        $shareSocial = Share::page('https://github.com/proameer/html-tasks' , 'html-tasks')
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();
        dd($shareSocial);
    }
}
