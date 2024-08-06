@if (auth()->user()->hasRole('administrator'))
<nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                            <i class="fa-solid fa-circle-chevron-down text-dark lg me-2"></i>
                                <img src="../image/admin.png" class="avatar img-fluid rounded" alt="Administrator">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                                <!-- <a href="#" class="dropdown-item">Setting</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
@endif
@if(auth()->user()->hasRole('operator'))
<nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                            <i class="fa-solid fa-circle-chevron-down text-dark lg me-2"></i>
                                <img src="image/operator.png" class="avatar img-fluid rounded" alt="Operator">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                                <!-- <a href="#" class="dropdown-item">Setting</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
@endif
@if(auth()->user()->hasRole('petugas'))
<nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                            <i class="fa-solid fa-circle-chevron-down text-dark lg me-2"></i>
                                <img src="image/petugas.png" class="avatar img-fluid rounded" alt="Petugas">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                                <!-- <a href="#" class="dropdown-item">Setting</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @endif