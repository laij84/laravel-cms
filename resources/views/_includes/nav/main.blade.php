<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{route('home')}}">
                <img class="nav-item is-paddingless" src="https://devmarketer.io/wp-content/uploads/2016/07/devmarketer-logo.png" alt="DevMarketer Logo">
            </a>
            <button class="button navbar-burger">
              <span></span>
              <span></span>
              <span></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
            </div>
        </div>
        <div class="navbar-end nav-menu" style="overflow: visible">
                @guest
                  <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                  <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Hey {{Auth::user()->name}}</a>
                    <div class="navbar-dropdown is-right" >
                        <a href="#" class="navbar-item">
                            <span class="icon">
                                <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                            </span>Profile
                        </a>

                        <a href="#" class="navbar-item">
                            <span class="icon">
                                <i class="fa fa-fw fa-bell m-r-5"></i>
                            </span>Notifications
                        </a>
                        <a href="{{route('manage.dashboard')}}" class="navbar-item">
                            <span class="icon">
                                <i class="fa fa-fw fa-cog m-r-5"></i>
                            </span>Manage
                        </a>
                        <hr class="navbar-divider">
                        <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <i class="fa fa-fw fa-sign-out m-r-5"></i>
                        </span>
                        Logout
                    </a>
                    @include('_includes.forms.logout')
                </div>
            </div>
                @endguest
            </div>
        </div>
    </div>    
    
</nav>


