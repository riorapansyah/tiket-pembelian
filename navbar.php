<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">

      

      <div class="navbar-nav">
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="data_tiket.php">Data Tiket</a>
          <a class="nav-link" href="history.php">Melihat Pembelian History</a>
        <?php endif ?>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') : ?>
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="pembelian_tiket.php">Pembelian Tiket</a>
        <?php endif ?>
      </div>

      <div>
        <div class="btn-group">
          <button type="button" class="btn btn-transparent border rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>
