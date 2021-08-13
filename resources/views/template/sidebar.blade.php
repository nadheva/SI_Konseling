<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('assets/img/brand/logos.png')}}" class="navbar-brand-img" alt="..." >
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                <i class="ni ni-tv-2 text-default"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ url('/siswa') }}">
                  <i class="ni ni-books text-default"></i>
                  <span class="nav-link-text">Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('/konselor') }}">
                  <i class="ni ni-hat-3 text-default"></i>
                  <span class="nav-link-text">Konselor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('/jadwal') }}">
                  <i class="ni ni-calendar-grid-58 text-default"></i>
                  <span class="nav-link-text">Jadwal</span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
