@extends('admin.layouts.master')

@section('content')

<div class="wrapper">
    
    @include('admin.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">
        
        <div class="page-header">
        
          <h2>Users</h2>
          
        </div>

        <!-- <div class="line"></div> -->
      
        <div class="page-content col-md-9 col-md-offset-1">
        
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            
            <tbody>
              
              @foreach($users as $user)
              
                <tr>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->name }}</td>
                  <td>
                    <a href="/user/edit/{{ $user->id }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>
                    &nbsp;
                    <a href="/user/delete/{{ $user->id }}" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                  </td>
                </tr>

              @endforeach
              
            </tbody>
            
          </table>
          
          {{ $users->links() }}
          
        </div>
        
    </div>
</div>

@endsection
