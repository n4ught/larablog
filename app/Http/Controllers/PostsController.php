<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

use \App\Category;

use Purifier;

class PostsController extends Controller
{
  
    public function __construct()
    {
      
      $this->middleware('auth')->except(['index', 'show']);
      
    }
  
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
      
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
          
          'title'    => 'required',
          'category' => 'required',
          'postBody' => 'required'
          
        ]);
        
      
        $post = new Post;
        
        $post->user_id = auth()->id();
        //$post->user_id = 1;
        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = ucfirst(Purifier::clean($request->postBody));
        $post->save();
        
        $slugId = $post->id;
        $post->slug .= '-' . $slugId;
        $post->save();        
        
        // Redirect with flashed data
        //return redirect('/posts/create');
        return redirect()->back()->with('success', 'User successfully added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

      $post = Post::where('id', $id)->first();
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
        
        $post = Post::where('id', $id)->with('category')->first();
      
        if(count($post) == 0){
          abort(404);
        }
      
        $categories = Category::all();
      
        return view('admin.post.edit', compact('categories', 'post'));
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
        
        $request->validate([
          
          'title'    => 'required',
          'category' => 'required',
          'postBody' => 'required'
          
        ]);
        
      
        $post = Post::find($id);
        
        //$post->user_id = auth()->id();
        $post->user_id = 1;
        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = Purifier::clean($request->postBody);
        $post->save();
        
        $slugId = $post->id;
        $post->slug .= '-' . $slugId;
        $post->save();        
        
        // Redirect with flashed data
        //return redirect('/posts/create');
        return redirect()->back()->with('success', 'User successfully edited!');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        $post->delete();
          
        return redirect()->back()->with('success', 'User successfully edited!');
    }
  
    public function getSlug(Request $request)
    {

      return Post::where('slug_key', $request->slugToBeChecked)->get();
      

    }
  
}
