<nav class="navbar navbar-default nav-justified navbar-fixed-top">
  <div class="container"> 
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <!-- Navigation Links -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-justified">
        <li> <a href="{{ route('pages.index')}}">Kezdőlap</a> </li>
        <li> <a href="{{ route('pages.about')}}">Cégünkről</a> </li>
        {{-- <li> <a href="menu.html">Menu</a> </li> --}}
        <li> <a href="{{ route('pages.products')}}">Termékek</a></li>
        {{-- <li> <a href="gallery.html">Gallery</a> </li> --}}
        {{-- <li> <a href="events.html">Events</a> </li> --}}
        {{-- <li> <a href="team.html">Team</a> </li> --}}
        <li> <a href="{{ route('pages.contact')}}">Kapcsolat</a> </li>
      </ul>
    </div>
  </div>
</nav>