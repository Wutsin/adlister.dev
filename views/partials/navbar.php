<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-inverse" role="navigation">

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
        <a class="pull-left wutsinLogo" href="/"><img src="/img/wutsinLogo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">

        <ul class="nav navbar-nav">
            <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="/ads?search=">Items</a></li>
            <?php
                if (!Auth::check()) {
                    echo
                    '<li><a href="/login">Login</a></li>
                    <li><a href="/signup">SignUp</a></li>';
                } else {
                    echo
                    '<li><a href="/account?userId=' . Auth::id() . '">Account</a></li>
                    <li><a href="/create">Post Ad</a></li>
                    <li><a href="/logout">Logout</a></li>';
                }
            ?>
        </ul>

        <!-- navbar-left will move the search to the left -->
        <form method="GET" action="/ads" id="searchform" class="navbar-form navbar-right" role="search">

            <div class="input-group form-group-md">
                <input type="text" name="search" class="form-control" placeholder="Search">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">Submit</button>
                </span>
            </div>
        </form> <!-- close form -->
    </div><!-- /.navbar-collapse -->
</nav> <!-- close navbar -->
