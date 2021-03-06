<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" style="min-height: 72px;">
                <button id="menu-toggle" class="btn btn-dark d-none d-md-block" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/imgs/logo_red.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" aria-expanded="true">

                      @guest
                      @else
                        @can('roles.index')
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index')}}">Ver Roles</a>
                          </li>
                        @endcan('roles.index')
                        @can('products_description.edit')
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.administrate')}}">Administrar Productos</a>
                          </li>
                        @endcan('products_description.edit')

                      @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item d-flex align-items-center ">
                              <small class="nav-link bg-light text-dark border-rounded">Presupuesto: $450.66</small>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{asset('assets/imgs/users/default.jpg')}}" class="img-min-user" alt="">

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a  href="{{ route('shop-cart.index') }}" class="dropdown-item d-flex align-items-center justify-content-around" href="#">
                                      Carrito
                                      <i class="material-icons">shopping_cart</i>
                                      @if (count(json_decode(Cookie::get('itemsShopCart'))) > 0)
                                        <span class="badge badge-primary">
                                          {{ count(json_decode(Cookie::get('itemsShopCart'))) }}
                                        </span>
                                     @endif
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-around" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                      <i class="material-icons">eject</i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
