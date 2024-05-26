<?php
$session = session(); ?>

<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <a href="index.html" class="navbar-brand sidebar-gone-hide">SOLOLINGO</a>
  <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>

  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="<?php echo base_url('template/stisla/dist/assets/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1" />
        <div class="d-sm-none d-lg-inline-block">
          <?= $session->get('name') ?>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <form action="/logout" method="POST">
          <button class="dropdown-item has-icon text-danger d-flex align-items-center">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </button>
        </form>
      </div>
    </li>
  </ul>
</nav>