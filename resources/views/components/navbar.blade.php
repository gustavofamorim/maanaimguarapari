<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid navbar-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#maanaim-navbar" aria-expanded="false">
                <span class="sr-only">Opções de Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0px;">
                <img alt="Logo" src="{{ asset('img/logo.o.svg') }}">
            </a>
        </div>
        
        <div class="collapse navbar-collapse" id="maanaim-navbar">
            <ul class="nav navbar-nav">
                <li {{ isset($home) ? 'class=active' : '' }}><a href="{{ route('index') }}">Home</a></li>
                <li {{ isset($eventos) ? 'class=active' : '' }}><a href="{{ route('eventos') }}">Eventos</a></li>
                @if(isset($aditional))
                    <li class="active"><a href="#">{{ $aditional }}</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li {{ isset($voluntario) ? 'class=active' : '' }} ><a target="_blank" href="{{ route('voluntario') }}">Seja voluntário!</a></li>
                <li class="dropdown">
                    <a id="login-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                        @if(Auth::check())
                            Auth::user()->name
                        @else
                            Login
                        @endif
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="text-center">
                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                            </p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong>{{ Auth::user()->name }}</strong></p>
                                            <p class="text-left small">{{ Auth::user()->email }}</p>
                                            <p class="text-left">
                                                <a href="#" class="btn btn-primary btn-block btn-sm">Dashboard</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                <a href="#" class="btn btn-danger btn-block">Sair</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                                {{ csrf_field() }}
                        
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-12">E-Mail: </label>
                        
                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-12">Senha: </label>
                        
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="form-control" name="password" required>
                        
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group">
                                                    <div class="col-xs-5">
                                                        <button type="submit" class="btn btn-primary">
                                                            Login
                                                        </button>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <a class="btn btn-link control-label" href="{{ route('password.request') }}">
                                                            Esqueci minha senha
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>