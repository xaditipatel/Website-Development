<header id="header" class="indexHeader">
            <div class="navigation-bar">
                <div class="zigzag" id="navigation-container">
                <img alt="JBra's logo" class="logo" src="{{ URL::to('/') }}/images/logo.png"></img>
                    <ul>                        
                        <li><a class="hide">&#9776;</a>
                        <ul class="menu">
                            <li><a href="/index" id="active">INICIO</a> 
                            <a href="/aboutus">SOBRE NOSOTROS</a>
                                <a href="http://axp4419.uta.cloud/blog">BLOG</a>
                                <a href="/menu">MENU</a>
                                @guest
                                <a href="/login" >NICIAR SESION</a>
                                <a href="{{ route('register') }}">REGISTRO</a>
                                @else
                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>                                </li>
                            @endguest
                                <a href="/contact-us">CONTACTO</a>
                                </li>
                                </ul>
                            </li>
                    </ul>
                </div>

            </div>
            <div class="header_content">
                LAS MEJORES DE LA CIUDAD <br><br><br>
                <h1>@yield('title')</h1>
                <a href="{{ url('menu') }}"><button class="button1" type="button" href="{{ url('menu') }}">VER MENÚ HOY</button></a>
            </div>
        </header>