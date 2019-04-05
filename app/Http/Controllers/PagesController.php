<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class PagesController extends Controller
{
    public function index(){
      
      $posts = Post::latest()->paginate(6);
      
      return view('pages.index', compact('posts'));
      
    }
    
    public function page($page){
      
      $category = Category::where('slug', $page)->first();
      
      if(!is_null($category) > 0){                   
        
        $posts = Category::find($category->id)->posts()->latest()->paginate(6);
        
        return view('pages.category', compact('category', 'posts'));
      
      }else{
        abort(404);
      }
      
    }
  
}
