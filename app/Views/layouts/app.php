<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
  <title>SOLOLINGO</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('template/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('template/stisla/dist/assets/modules/fontawesome/css/all.min.css'); ?>" />

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('template/stisla/dist/assets/css/style.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('template/stisla/dist/assets/css/components.css'); ?>" />
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-94034622-3");
  </script>
  <!-- /END GA -->
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <?= $this->include('components/topbar') ?>
      <?= $this->include('components/navbar') ?>

      <?= $this->renderSection('content') ?>

      <?= $this->include('components/footer') ?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url('template/stisla/dist/assets/modules/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/modules/popper.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/modules/tooltip.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/modules/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/js/stisla.js'); ?>"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?php echo base_url('template/stisla/dist/assets/js/scripts.js'); ?>"></script>
  <script src="<?php echo base_url('template/stisla/dist/assets/js/custom.js'); ?>"></script>
</body>

</html>