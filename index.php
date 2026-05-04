<?php
// Load data and handle form submissions
require_once 'includes/data.php';
require_once 'includes/form_handler.php';

// Set page title and include header
$page_title = 'Velociti | Premium Cycle Shop';
require_once 'includes/header.php';

// Assemble the page using modular sections
require_once 'includes/sections/hero.php';
require_once 'includes/sections/featured.php';
require_once 'includes/sections/about.php';
require_once 'includes/sections/testimonials.php';
require_once 'includes/sections/blogs.php';
require_once 'includes/sections/contact.php';

// Include footer
require_once 'includes/footer.php';
?>
