<?php
$session = session();
?>
<nav class="navbar navbar-secondary navbar-expand-lg">
  <div class="container">
    <?php if ($session->get('user_type_name') == "admin") : ?>
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
        <li class="nav-item <?= ($uri = service('uri')->getSegment(2)) === 'courses' ? 'active' : '' ?>">
          <a href="/admin/courses" class="nav-link">
            <i class="fas fa-book"></i>
            <span>Course</span>
          </a>
        </li>
      </ul>
    <?php else : ?>
      <ul class="navbar-nav">
        <li class="nav-item <?= ($uri = service('uri')->getSegment(2)) === 'dashboard' ? 'active' : '' ?>">
          <a href="/admin/dashboard" class="nav-link">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
      </ul>
    <?php endif; ?>
  </div>
</nav>