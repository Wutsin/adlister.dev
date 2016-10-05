<!-- Collapsible Navigation Bar -->
<div class="container">

<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-default">
  <div class="container-fluid navBarBackgroundColor">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed hamburgerButton" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">

      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>

        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
      <a class="pull-left wutsinLogo" href="/"><img src="/wutsinLogo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/index">Items</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/signup">SignUp</a></li>
        <li><a href="/account">Account</a></li>
        <li><a href="/">Logout</a></li>
        <li><a href="/create">Post Ad</a></li>
      </ul>
      <!-- navbar-left will move the search to the left -->
      <form class="navbar-form navbar-right" role="search">
        <div class="input-group form-group-md">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Submit</button>
          </span>
        </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<br>
