

<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                CompuKami
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li{{ Request::is('catalog*') && !Request::is('catalog/create')? ' class=active' : ''}}>
                    <a href="{{url('/catalog')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Catálogo
                    </a>
                </li>
            @if( Auth::check() )
                <li{{ Request::is('catalog/create') ? ' class=active' : ''}}>
                    <a href="{{url('/catalog/create')}}">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nueva película
                    </a>
                </li>
            @endif
            </ul>


            <ul class="nav navbar-nav navbar-right">
                

            @if(Auth::check())        
                <li>
                    <a href="{{url('/logout')}} ">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        Cerrar Sesión
                        
                    </a>
                </li>
            @else
                <li>
                    <a href="{{url('/login')}}">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        Login
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        Register
                    </a>
                </li>
            @endif
            </ul>
        </div>
    </div>
</nav>
