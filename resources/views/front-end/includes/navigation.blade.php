<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach($menu as $menuItem)
                    @if($menuItem['title'] != 'Virtualūs kambariai' && $menuItem['title'] != 'Virtual rooms')

                        <li><a href="#{{$menuItem['slug']}}">{{$menuItem['title']}}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menuItem['title']}}</a>
                            <ul class="dropdown-menu">
                                @foreach($rooms as $room)
                                    @foreach($pagesLanguages as $pageLanguage)
                                       @if($room['id'] == $pageLanguage['pages_id'])
                                         <li><a href="#{{$pageLanguage['slug']}}">{{$pageLanguage['title']}}</a></li>
                                        @endif
                                  @endforeach
                             @endforeach
                            </ul>
                        </li>
                    @endif
             @endforeach

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('app.language')}}</a>
                        <ul class="dropdown-menu">

                            <li><a href="/lt">Lt</a></li>
                            <li><a href="/en">En</a></li>

                        </ul>
                    </li>

                    {{--login logaout--}}

                    @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown" style="margin-left:100px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

