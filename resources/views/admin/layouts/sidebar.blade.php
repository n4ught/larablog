<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <div class="admin-name-container col-md-12">
          <div class="col-md-5">
            <span><img src="/assets/img/blank-profile-picture.png" height="60" width="60"></span>
          </div>
          
          <div class="col-md-7 second-col">
            <h3 class="admin-name">@if(Auth::check()) {{ Auth::user()->name }} @else {{ 'Admin' }} @endif</h3>
            <span><a href="/admin/logout">Logout</a></span>
          </div>
          
        </div>
        <div class="home-link-container">
          <a href="/" target="_blank"><i class="fas fa-home"></i> Visit Website</a>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li class="{{ request()->is('admin/users') || request()->is('admin/user/create') || request()->is('admin/user/edit/*') || request()->is('admin') ? 'active' : '' }}">
            <a href="/admin/users"><i class="fas fa-user"></i> Users</a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fas fa-thumbtack"></i> Posts</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li class="{{ request()->is('admin/posts') ? 'active' : '' }}"><a href="/admin/posts"><i class="far fa-check-square"></i>&nbsp; All Posts</a></li>
                <li class="{{ request()->is('admin/post/create') ? 'active' : '' }}"><a href="/admin/post/create"><i class="fas fa-plus"></i>&nbsp; Add New</a></li>
                <li class="{{ request()->is('admin/categories') || request()->is('admin/category/create') || request()->is('admin/category/edit/*')? 'active' : '' }}"><a href="/admin/categories"><i class="fas fa-tags"></i>&nbsp; Categories</a></li>
                <li><a href="/admin/categories">Tags</a></li>
            </ul>
        </li>

    </ul>
</nav>
