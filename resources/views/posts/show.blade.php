
@extends('layouts.master')

@section('content')

    @include('layouts.nav')

    <!-- Page Header -->
  <header class="masthead" style="background-image: url('/assets/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            <span class="meta">Posted by
              <a href="#">{{ $post->user->name}}</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto text-center">
          {{ $post->content }}
        </div>
      </div>
    </div>
  </article>


  @include('layouts.footer')



@endsection