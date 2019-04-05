<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    
    public function __construct()
    {
      
      $this->middleware('guest', ['except' => 'destroy']);
      
    }
    
    // Show login form
    public function create()
    {
      
      return view('admin.sessions.create');
      
    }
    
    // Logout
    public function destroy()
    {
        
      auth()->logout();
      
      return redirect()->home();
      
    }
  
    public function store()
    {
      
      // Attempt to authenticate the user.
      // If not, redirect back.
      if(!auth()->attempt(request([ 'email', 'password' ]))){
        
        return back()->withErrors([
          
          'message' => 'Please check your credentials and try again'
          
        ]);
        
      }
      

      // If so, sign them in.
      return redirect()->route('admin');      
      
      // Redirect to the homepage.
      
    }
  
  
}
