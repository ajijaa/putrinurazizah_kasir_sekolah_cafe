<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>restoran Bubu Caké</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height : 300px">
  <!-- Header -->
  <?php include "header.php"; ?>
  <!-- End Header -->
  <div class="container-lg">
    <div class="row">
      <!-- sidebar -->
      <?php include "sidebar.php"; ?>
      <!-- End Sidebar -->

      <!-- content-->
      <?php
      if (isset($_GET['x']) && $_GET['x'] == 'home') {
        include "home.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'order') {
        include "order.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'product') {
        include "product.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'costumer') {
        include "customer.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'report') {
        include "report.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'login') {
        include "login.php";
      } else {
        include "home.php";
      }
      ?>
      <div class="col-lg-9 mt-2">
        <div class="card">
          <div class="card-header">
            Home
          </div>
          <div class="card-body">
            <h5 class="card-title">Ini adalah bagian home</h5>
            <p class="card-text">Home is not a place, it's a snuggly little feeling.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <!-- End Content -->
    </div>

    <div class="fixed-bottom text-center">
      copyright 2025 Bubu Caké
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>