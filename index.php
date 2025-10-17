<?php include('includes/header.php'); ?>

<!-- Hero Section -->
<section class="bg-dark text-white text-center py-5" style="background: url('assets/images/commercial-pest-banner.jpg') center/cover no-repeat;">
  <div class="container py-5">
    <h1 class="display-4 fw-bold">Professional Pest Control Services</h1>
    <p class="lead">Keep your commercial spaces safe, clean, and pest-free. Serving malls, offices, shops & more.</p>
    <a href="contactus.php" class="btn btn-warning btn-lg mt-3">Book Now</a>
  </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <h2 class="fw-bold text-success">About Our Pest Control Services</h2>
        <p>We are a leading pest management company headquartered in Bhubaneswar, Odisha – serving clients across India.</p>
        <ul class="list-unstyled">
          <li>✔ 5000+ skilled professionals trained under ISO protocols</li>
          <li>✔ 24/7 service support & emergency response</li>
          <li>✔ AI & IoT-backed pest management tools</li>
          <li>✔ SOPs tailored to healthcare, corporate, residential & industrial sectors</li>
        </ul>
        <a href="contactus.php" class="btn btn-success mt-3">Contact Us</a>
      </div>
      <div class="col-md-6">
        <div class="row g-2">
          <div class="col-6"><img src="assets/images/banner.jpg" class="img-fluid rounded" alt="Pest control professional"></div>
          <div class="col-6"><img src="assets/images/banner.jpg" class="img-fluid rounded" alt="Pest control team"></div>
          <div class="col-12 mt-2"><img src="assets/images/banner.jpg" class="img-fluid rounded" alt="Eco-friendly pest prevention"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-4">Our Services</h2>
    <div class="row g-4">
      <?php
        $services = [
          ["Commercial Pest Control","Receptionists, front desk, data entry, and office assistants to keep your business running seamlessly."],
          ["Emergency Pest Response","Trained teams on standby for disaster recovery, critical equipment delivery, and urgent power solutions."],
          ["Preventive Pest Management","Uniformed, trained, and verified guards for institutions, events, and residences."],
          ["Eco-Friendly Pest Solutions","Spotless premises maintained by skilled staff with an eye for detail."]
        ];
        foreach($services as $service):
      ?>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="assets/images/banner.jpg" class="card-img-top" alt="<?= $service[0] ?>">
          <div class="card-body">
            <h5 class="card-title text-success"><?= $service[0] ?></h5>
            <p class="card-text"><?= $service[1] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Testimonials</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <p class="fs-5 fst-italic">"We urgently needed guards for a weekend exhibition. Dial9 managed everything seamlessly."</p>
          <strong>Event Coordinator, Cuttack</strong>
        </div>
        <div class="carousel-item">
          <p class="fs-5 fst-italic">"Dial 9 has been managing our facility and fleet for 2 years – like part of our own team."</p>
          <strong>Admin Head, Bhubaneswar IT Park</strong>
        </div>
        <div class="carousel-item">
          <p class="fs-5 fst-italic">"Their team stepped in during our peak season and handled all staffing needs seamlessly."</p>
          <strong>Operations Manager, Hospitality Group</strong>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-success rounded-circle"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-success rounded-circle"></span>
      </button>
    </div>
  </div>
</section>


<section class="support-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image -->
      <div class="col-lg-6 text-center mb-4 mb-lg-0">
        <img src="assets/images/calling_staff.webp" alt="Support" class="img-fluid w-50">
      </div>
      <!-- Text & Button -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold">Need Help? We’re Just a Call Away.</h2>
        <p class="mt-3 mb-4">Our experts will assess your needs and provide a tailored solution — permanent or project-based.</p>
        <a href="tel:+1234567890" class="btn btn-primary btn-lg">Call Us Now</a>
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
