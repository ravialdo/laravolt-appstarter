<nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="user-avatar lg-avatar me-4">
          <img src="{{ asset('img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h6 text-capitalize">Hii, {{ auth()->user()->username }}</h2>
          <a href="{{ route('app.logout') }}" class="btn btn-secondary text-dark btn-xs"><span
              class="me-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
  
      <li class="nav-item {{ route('dashboard.index') == url()->current() ? 'active' : '' }}">
        <a href="{{ route('dashboard.index') }}" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
	
	<li class="nav-item">
        <span
          class="nav-link #collapsed d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
            <span class="sidebar-text">Page Example</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse #show"
          role="list" id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item #active">
              <a class="nav-link" href="#">
                <span class="sidebar-text">Item 1</span>
              </a>
            </li>
			<li class="nav-item #active">
              <a class="nav-link" href="#">
                <span class="sidebar-text">Item 2</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    
    </ul>
  </div>
</nav>