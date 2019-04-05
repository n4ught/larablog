<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Post;

use Purifier;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
   
   public function __construct()
   {
    
     $this->middleware('auth');
    
   }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
      
      dd($category);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
          
        'name'    => 'required|unique:categories',
        'slug'        => 'required|unique:categories,slug',
        'description' => 'required',

      ]);


      $category = new Category;

      //$post->user_id = auth()->id();
      $category->name = $request->name;
      
      $category->slug = strtolower(str_replace(' ', '-', $request->slug));

      $category->description = Purifier::clean($request->description);
      
      $category->save();

      // Redirect with flashed data
      //return redirect('/posts/create');
      return redirect()->back()->with('success', 'Category successfully added!'); 
      
    }
  
    public function checkRecordFromDB($slug){
      
      $category = Category::where('base_slug', $slug)->get();
      
      if(count($category) > 0){
        // Records were found in the database.
        return true;
      }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
      
        if(count($category) == 0){
          abort(404);
        }
      
        return view('admin.category.edit', compact('category'));
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
       
       // 3rd parameter on slug rule means to ignore
      // the field with the specific id
       $request->validate([
          
        'name'        => 'required',
        'slug'        => 'unique:categories,slug,' .$id,
        'description' => 'required',

      ]);

      $category = Category::find($id);

      //$post->user_id = auth()->id();
      $category->name = $request->name;
      
      $category->slug = str_replace(' ', '-', strtolower($request->slug));

      $category->description = Purifier::clean($request->description);
      
      $category->save();

      // Redirect with flashed data
      //return redirect('/posts/create');
      return redirect()->back()->with('success', 'Category successfully edited!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $category = Category::find($id);
      
        $posts = $category->posts;
        
        // If the category has posts.
        if(count($posts) > 0){
          Post::where('category_id', $id)->update([ 'category_id' => 1 ]);
        }
        
        $category->delete();
          
        return redirect()->back()->with('success', 'Category successfully deleted!');
    }
}
