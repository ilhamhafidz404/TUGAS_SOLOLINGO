<nav class="navbar navbar-secondary navbar-expand-lg">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item <?= ($uri = service('uri')->getSegment(2)) === 'dashboard' ? 'active' : '' ?>">
        <a href="/admin/dashboard" class="nav-link">
          <i class="fas fa-fire"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= ($uri = service('uri')->getSegment(2)) === 'users' ? 'active' : '' ?>">
        <a href="/admin/users" class="nav-link">
          <i class="fas fa-user"></i>
          <span>User</span>
        </a>
      </li>
    </ul>
  </div>
</nav>