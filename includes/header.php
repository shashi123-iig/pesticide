<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesticide Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Pesticide Co.</a>

      <!-- Hamburger button triggers offcanvas -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" aria-controls="mobileMenuOffcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Desktop Menu -->
      <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex" >
        <ul class="navbar-nav gap-2">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact</a></li>
          <li class="nav-item"><a class="btn btn-warning text-dark" href="contactus.php">Book Now</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Offcanvas Mobile Menu -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuLabel" style="background-color: #18ab49;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title text-white" id="mobileMenuLabel">Menu</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav flex-column">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact</a></li>
        <li class="nav-item"><a class="btn btn-warning text-dark mt-3" href="contactus.php">Book Now</a></li>
      </ul>
    </div>
  </div>
</header>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional custom JS -->
<script src="assets/js/script.js"></script>

</body>
</html>
