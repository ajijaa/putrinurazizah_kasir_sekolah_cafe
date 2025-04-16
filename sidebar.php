<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-1">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo(isset($_GET['x']) && $_GET['x']=='home') ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="index.php?x=home"><i class="bi bi-house-heart"></i> Dashboard </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  ps-2 <?php echo(isset($_GET['x']) && $_GET['x']=='order') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=order"><i class="bi bi-bag-heart"></i> Order</a>
            <li class="nav-item">
            <a class="nav-link  ps-2 <?php echo(isset($_GET['x']) && $_GET['x']=='customer') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=customer"><i class="bi bi-person-hearts"></i> Customer</a>
            <li class="nav-item">
            <a class="nav-link  ps-2 <?php echo(isset($_GET['x']) && $_GET['x']=='product') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=product"><i class="bi bi-boxes"></i> product</a>
            <li class="nav-item">
            <a class="nav-link  ps-2 <?php echo(isset($_GET['x']) && $_GET['x']=='product') ? 'active link-light' : 'link-dark' ; ?>" href="index.php?x=report"><i class="bi bi-postcard-heart"></i> report</a>
        </ul>
      </div>
    </div>
  </div>
</nav>
    </div>