@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
    
    @include('admin.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>Categories</h2>
          
        </div>

        <!-- <div class="line"></div> -->
      
        <div class="page-content col-md-10 col-md-offset-1">
          
          <a href="/admin/category/create" class="btn btn-success create-post-btn"><i class="fas fa-plus"></i> Create New Category</a>
          
          <table class="table table-bordered text-center">
            
            <thead class="text-center">
              <tr>
                <th class="post-category-header">Category Name</th>
                <th class="post-category-header">Description</th>
                <th class="post-category-header">Slug</th>
                <th class="post-category-header">Post Count</th>
                <th class="post-category-header">Actions</th>
              </tr>
            </thead>
            
            <tbody>
              
              @foreach($categories as $category)
              
                <tr>
                  <td>{{ ucwords($category->name) }}</td>
                  <td>{{ strip_tags(ucfirst($category->description)) }}</td>
                  <td>{{ $category->slug }}</td>
                  <td class="text-primary"><u><a href="#">{{ count($category->posts) }}</a></u></td>
                  <td>
                    <a href="/admin/category/edit/{{ $category->id }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>
                    &nbsp;
                    @if($category->id !== 1)
                      <a href="/admin/category/delete/{{ $category->id }}" class="btn btn-danger delete-category-btn"><i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                    @endif
                  </td>
                </tr>

              @endforeach
              
            </tbody>
            
          </table>
          
          {{ $categories->links() }}
          
        </div>
        
    </div>
</div>

@endsection
