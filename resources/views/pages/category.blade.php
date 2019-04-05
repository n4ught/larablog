@extends('layouts.master')

@section('content')

  @include('layouts.nav')

  @include('layouts.header')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
  
              @if(count($posts) > 0)
                @foreach($posts as $post)
                  <div class="post-preview">
                      <a href="{{ '/post/' . $post->id }}">
                          <h2 class="post-title">
                              {{ $post->title }}
                          </h2>
                          <h3 class="post-subtitle">
                              {{ $post->content }}
                          </h3>
                      </a>
                      <p class="post-meta">Posted by {{ $post->user->name }} on September 24, 2014</p>
                  </div>
                  <hr />
                @endforeach
              @endif
             
              {{ $posts->links('vendor.pagination.older-posts') }}

            </div>
        </div>
    </div>

    <hr>

  @include('layouts.footer')

@endsection