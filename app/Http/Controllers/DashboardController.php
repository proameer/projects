<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;
use App\Models\User;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\Social;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index(){
        $postCount=Post::count();
        $categoryCount=Categories::count();
        $userCount = User::count();
        $permissionCount = Permission::count();
        $roleCount = Role::count();
        $logoCount = logo::count();
        $socialCount = Social::count();
        $contactCount = Contact::count();

        return view('dashboard.index',compact('postCount','categoryCount','userCount','permissionCount','roleCount','logoCount','socialCount','contactCount') );
    }
   
}
