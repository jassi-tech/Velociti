<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Velociti | Premium Cycle Shop'; ?></title>
    <link rel="icon" type="image/svg+xml" href='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="50" fill="%23FF5722" /><text x="50%25" y="50%25" text-anchor="middle" dy=".3em" font-family="sans-serif" font-size="65" font-weight="bold" fill="white">V</text></svg>'>
    <meta name="description" content="Discover premium bicycles for road, mountain, and urban riding. Experience the thrill of Velociti.">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Page Loader -->
    <div id="page-loader">
        <div class="loader-content">
            <i class="fa-solid fa-person-biking loader-icon"></i>
            <div class="loader-text">Velociti<span>.</span></div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <i class="fa-solid fa-person-biking"></i> Velociti<span>.</span>
            </a>
            <?php 
                $is_home = (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == ''); 
                $nav_prefix = $is_home ? '' : 'index.php';
            ?>
            <ul class="nav-links" id="nav-menu">
                <li><a href="<?php echo $nav_prefix; ?>#home">Home</a></li>
                <li><a href="<?php echo $nav_prefix; ?>#featured">Bikes</a></li>
                <li><a href="<?php echo $nav_prefix; ?>#about">About</a></li>
                <li><a href="<?php echo $nav_prefix; ?>#reviews">Reviews</a></li>
                <li><a href="<?php echo $nav_prefix; ?>#journal">Journal</a></li>
                <li><a href="<?php echo $nav_prefix; ?>#contact">Contact</a></li>
                <li><a href="login.php" style="color: var(--accent);"><i class="fa-regular fa-user"></i> Login</a></li>
            </ul>
            <a href="<?php echo $nav_prefix; ?>#featured" class="btn btn-primary nav-btn">Shop Now</a>
            
            <div class="mobile-menu-btn" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
