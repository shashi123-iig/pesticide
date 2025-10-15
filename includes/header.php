<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $page_title ?? 'Pesticide Company'; ?></title>
    <meta name="description" content="<?= $page_description ?? 'Leading pesticide company providing eco-friendly crop protection solutions.'; ?>">
    <link rel="canonical" href="<?= $page_url ?? 'https://www.example.com/'; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $page_title ?? 'Pesticide Company'; ?>">
    <meta property="og:description" content="<?= $page_description ?? 'Leading pesticide company providing eco-friendly crop protection solutions.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $page_url ?? 'https://www.example.com/'; ?>">
    <meta property="og:image" content="<?= $page_image ?? 'https://www.example.com/images/og-image.jpg'; ?>">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">🌿 Pesticide Co.</a>
            </div>

            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="contactus.php" class="btn-book">Book Now</a></li>
            </ul>
        </nav>
        
    </header>

    <script>
        const menu = document.getElementById('mobile-menu');
        const navList = document.querySelector('.nav-list');

        menu.addEventListener('click', () => {
            navList.classList.toggle('active');
            menu.classList.toggle('open');
        });
    </script>
</body>
</html>
