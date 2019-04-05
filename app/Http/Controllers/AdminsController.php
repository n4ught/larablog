<?php

namespace App\Http\Controllers;

use App\User;

use App\Category;

use App\Post;

use DB;

use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator;

class AdminsController extends Controller
{

   public function __construct()
   {
    
     $this->middleware('auth');
    
   }
  
  public function index($page)
  {
     if($page == 'users'){
       
       $users = User::paginate(5);
       
       return view('admin.users.index', compact('users'));
       
     }else if($page == 'posts'){
       
       $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(5);
       
       return view('admin.post.index', compact('posts'));
       
     }else if($page == 'categories'){
       
       $categories = Category::paginate(5);
       
       return view('admin.category.index', compact('categories'));
       
     }else{
       abort(404);
     }
    
    
  }
  
  public function main(){
    
    $users = User::paginate(5);

    return view('admin.users.index', compact('users'));
    
  }
  
  
  
}
