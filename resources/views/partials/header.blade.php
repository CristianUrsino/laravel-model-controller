<ul class="nav">
    <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}} " href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('movies.index')}}">Product</a>
    </li>
  </ul>