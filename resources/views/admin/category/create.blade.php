@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
    
    @include('admin.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>New Category</h2>
          
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
        <div class="col-md-5 col-md-offset-3 create-post-form-container">
          
          <form method="POST" action="/admin/category/create">
            
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="name">Category Name:</label>
              <input type="text" class="form-control category-title" name="name" value="{{ old('name') }}" required />
            </div>
            
            <div class="form-group">
              <label for="name">Slug:</label>
              <input type="text" class="form-control category-slug" name="slug" value="{{ old('slug') }}" />
            </div>
            
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control post-content" name="description" rows="6" required>{{ old('description') }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
            <a href="/admin/categories" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
          </form>
        </div>
      
    </div>
</div>

@endsection
