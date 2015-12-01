<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('Site::index')}}">NxPanel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a class="active" href="{{route('Site::index')}}">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('Support::docs')}}">Documentation</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Online Chat</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" size="40">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                    <li><a href="{{route('Auth::register')}}">Register</a></li>
                    <li><a href="{{route('Auth::login')}}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Messages</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('Auth::logout')}}">Logout</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>