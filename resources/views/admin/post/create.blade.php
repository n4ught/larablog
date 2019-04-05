@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
    
    @include('admin.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>New Post</h2>
          
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
          
          <form method="POST" action="/admin/post/create">
            
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" value="{{ old('title') }}" required />
            </div>
            <div class="form-group">
              <label for="sel1">Category:</label>
              <select class="form-control" name="category" required>
                <option selected disabled>-- Choose Category --</option>
                
                <!--        Check if there are previous form values, this helps 
                input the old values when validation fails          -->
                @if(empty(old('category')))
                
                  @if($categories->count() > 0)
                
                    @foreach($categories as $category)

                      <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach

                  @endif
                        
                @else
                        
                  @if($categories->count() > 0)
                
                    @foreach($categories as $category)

                      <option value="{{ $category->id }}" {{ $category->id == old('category') ? 'selected' : '' }} >{{ $category->name }}</option>

                    @endforeach

                  @endif
                
                @endif
                

              </select>
            </div>
            <div class="form-group">
              <label for="post-content">Content:</label>
              <textarea class="form-control post-content" name="postBody" rows="6" required>{{ old('postBody') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
            <a href="/admin/posts" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
          </form>
        </div>
      
    </div>
</div>

@endsection
