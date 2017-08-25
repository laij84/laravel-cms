<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <div class="nav-item">
                <a href="{{route('home')}}">
                    <img src="https://devmarketer.io/wp-content/uploads/2016/07/devmarketer-logo.png" alt="DevMarketer Logo">
                </a>
                <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
            </div> 
        </div>
        <div class="nav-right">
            @if(Auth::guest())
                <a href="{{route('login')}}" class="nav-item is-tab">Log in</a>
                <a href="{{route('register')}}" class="nav-item is-tab">Join the Community</a>
            @else 
                <button class="dropdown nav-item is-tab is-aligned-right">Hey {{ Auth::user()->name }}<span class="icon"><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"> 
                                <span class="icon"><i class="m-r-10 fa fa-fw fa-user-circle-o"></i></span>Profile
                            </a>
                        </li>
                        <li>
                            <a href="#"> 
                                <span class="icon"><i class="m-r-10 fa fa-fw fa-bell"></i></span>Notifications
                            </a>
                        </li>
                        <li>
                            <a href="{{route('manage.dashboard')}}">
                                <span class="icon"><i class="m-r-10 fa fa-fw fa-cog"></i></span>Manage
                            </a>
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                <span class="icon"><i class="m-r-10 fa fa-fw fa-sign-out"></i></span>
                                Logout
                            </a>
                            @include('_includes.forms.logout')
                        </li>
                    </ul>
                </button>

                
            @endif
        </div>
    </div>
    
</nav>