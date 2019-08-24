<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/project">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">creativeArtist Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/admin/project">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="{{ route('project.create')}}">
      <i class="fas fa-fw fa-plus"></i>
      <span>Add Project</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/admin/project">
      <i class="fas fa-fw fa-folder"></i>
      <span>List Project</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/admin/message">
      <i class="fas fa-fw fa-envelope "></i>
      <span>Messages</span>
    </a>
  </li>

  <hr class="sidebar-divider">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>