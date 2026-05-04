<?php
require_once 'includes/data.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Find the blog
$current_blog = null;
foreach ($blog_posts as $post) {
    if ($post['id'] === $blog_id) {
        $current_blog = $post;
        break;
    }
}

// Redirect if not found
if (!$current_blog) {
    header('Location: index.php#journal');
    exit;
}

$page_title = $current_blog['title'] . ' | Velociti Journal';
require_once 'includes/header.php';
?>

<!-- Blog Article Section -->
<section class="blog-article-section">
    <div class="container article-container">
        <div class="article-header">
            <div class="article-category"><?php echo $current_blog['category']; ?></div>
            <h1><?php echo $current_blog['title']; ?></h1>
            <div class="blog-meta">
                <span><i class="fa-regular fa-calendar"></i> <?php echo $current_blog['date']; ?></span>
            </div>
        </div>
        
        <div class="article-featured-image">
            <img src="<?php echo $current_blog['image']; ?>" alt="<?php echo $current_blog['title']; ?>">
        </div>
        
        <div class="article-content">
            <?php echo $current_blog['content']; ?>
            
            <div class="article-actions">
                <a href="index.php#journal" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to Journal</a>
                <div class="share-buttons">
                    <span>Share:</span>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require_once 'includes/footer.php'; ?>
