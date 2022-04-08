<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle d-flex">
<i class="hamburger align-self-center"></i>
</a>
          
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="" id="messagesDropdown" data-toggle="dropdown">
                    <div class="position-relative">
                        <i class="fas fa-globe"></i>
                    </div>
                </a></li>
           




                @php
                $info=DB::table('infos')->first();
            @endphp

            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
    <i class="align-middle" data-feather="settings"></i>
  </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
    <img src="{{ asset($info->image) }}" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">{{ Auth::user()->name }}</span>
  </a>
                {{-- <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href=""><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href=""><i class="fas fa-cog"></i> Setting</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-power-off"></i> Log out</a>
                </div> --}}
            </li>
        </ul>
    </div>
</nav>