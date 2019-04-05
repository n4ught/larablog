@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
   
    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>Login</h2>
          
        </div>
      
        <!--     Include success message.     -->
        @if(Session::has('success'))
            
          @include('admin.layouts.success')
          
        @endif
        
        <!--     Includes error messages box.     -->
        @if ($errors->any())
        
          @include('admin.layouts.errors')
      
        @endif


        <!-- <div class="line"></div> -->
      
        <div class="page-content col-md-9 col-md-offset-1">
          
          <div class="col-md-8 col-md-offset-2">
            
            <form method="POST" action="/login">

               {{ csrf_field() }}             

               <div class="form-group">

                 <label for="email">Email:</label>

                 <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />

               </div>

               <div class="form-group">

                 <label for="password">Password:</label>

                 <input type="password" class="form-control" id="password" name="password" />

               </div>      

               <div class="form-group">

                 <button type="submit" class="btn btn-primary">Sign In</button>

               </div>

            </form>
            
          </div>
          
        </div>
        
    </div>
</div>

@endsection
