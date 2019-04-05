@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
    
    @include('admin.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>New Post</h2>
          
        </div>
      
        @if(Session::has('task'))
            
          <div class="alert alert-success fade in col-md-5 col-md-offset-3">
            
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('task') }}
      
          </div>
          
        @endif
      
        @if ($errors->any())
          <div class="alert alert-danger col-md-5 col-md-offset-3">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
  
        <!-- <div class="line"></div> -->
        <div class="col-md-5 col-md-offset-3 create-post-form-container">
          
          <form method="POST" action="/admin/post/edit/{{ $post->id }}">
            
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" value="{{ is_null(old('title')) ? $post->title : old('title') }}" required />
            </div>
            <div class="form-group">
              <label for="sel1">Category:</label>
              <select class="form-control" name="category" required>
                <option selected disabled>-- Choose Category --</option>
                
                @if($categories->count() > 0)
                
                  @foreach($categories as $category)

                    <option value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : '' }} >{{ $category->name }}</option>

                  @endforeach
                    
                @endif
              </select>
            </div>
            <div class="form-group">
              <label for="post-content">Content:</label>
              <textarea class="form-control post-content" name="postBody" rows="6" required>{{ is_null(old('postBody')) ? strip_tags($post->content) : old('postBody') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
            <a href="/admin/posts" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
          </form>
        </div>
      
    </div>
</div>

@endsection
