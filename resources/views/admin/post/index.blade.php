@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
    
    @include('admin.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>Posts</h2>
          
        </div>

        <!-- <div class="line"></div> -->
      
        <div class="page-content col-md-10 col-md-offset-1">
          
          <a href="/admin/post/create" class="btn btn-success create-post-btn"><i class="fas fa-plus"></i> Create New Post</a>
        
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
              </tr>
            </thead>
            
            <tbody>
              
              @foreach($posts as $post)
              
                <tr>
                  <td class="col-md-4">{{ $post->title }}</td>
                  <td class="col-md-5">
                    @if(strlen($post->content) > 20)
                      {{ strip_tags(substr($post->content, 0, 50) . '...') }}
                    @else
                      {{ strip_tags($post->content) }}
                    @endif
                  </td>
                  <td class="col-md-3">
                    <a href="/admin/post/edit/{{ $post->id }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>
                    &nbsp;
                    <a href="/admin/post/delete/{{ $post->id }}" class="btn btn-danger delete-post-btn"><i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                  </td>
                </tr>

              @endforeach
              
            </tbody>
            
          </table>
          
          {{ $posts->links() }}
          
        </div>
        
    </div>
</div>

@endsection
