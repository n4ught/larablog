<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    @if(!isset($category))
                      <h1>My Blog</h1>
                      <hr class="small">
                      <span class="subheading">A simple blog created within Laravel framework</span>  
                    @else
                      <h1>{{ $category->name }}</h1>
                      <hr class="small">
                      <span class="subheading">{{ $category->description }}</span>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>

  <!-- Page Header
  <header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          @if(!isset($category))
                      <h1>My Blog</h1>
                      <hr class="small">
                      <span class="subheading">A simple blog created within Laravel framework</span>  
                    @else
                      <h1>{{ $category->name }}</h1>
                      <hr class="small">
                      <span class="subheading">{{ $category->description }}</span>
                    @endif

          </div>
        </div>
      </div>
    </div>
  </header> -->