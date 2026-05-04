<?php
require_once 'includes/data.php';

// Find the bike
$bike_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$current_bike = null;

foreach ($featured_bikes as $b) {
    if ($b['id'] === $bike_id) {
        $current_bike = $b;
        break;
    }
}

// If bike not found, redirect to home
if (!$current_bike) {
    header('Location: index.php');
    exit;
}

$page_title = $current_bike['name'] . ' | Velociti';
require_once 'includes/header.php';
?>

<!-- Product Detail Section -->
<section class="product-details-section">
    <div class="product-container">
        <div class="product-image-col">
            <div class="product-img-wrapper">
                <img src="<?php echo $current_bike['image']; ?>" alt="<?php echo $current_bike['name']; ?>">
                <div class="bike-type-badge"><?php echo $current_bike['type']; ?></div>
            </div>
        </div>
        <div class="product-info-col">
            <h1><?php echo $current_bike['name']; ?></h1>
            <p class="product-price"><?php echo $current_bike['price']; ?></p>
            <p class="product-description"><?php echo $current_bike['description']; ?></p>
            
            <div class="product-specs">
                <h3>Specifications</h3>
                <ul class="specs-list">
                    <?php foreach($current_bike['specs'] as $spec): ?>
                        <li><i class="fa-solid fa-gear text-accent"></i> <?php echo $spec; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="product-actions">
                <a href="login.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a>
                <a href="index.php" class="btn btn-secondary">Back to Store</a>
            </div>
        </div>
    </div>
</section>

<!-- Related Bikes Section -->
<section class="related-section">
    <div class="section-header">
        <h2>You Might Also <span class="text-accent">Like</span></h2>
    </div>
    
    <div class="bikes-grid">
        <?php 
        $count = 0;
        foreach($featured_bikes as $bike): 
            if ($bike['id'] === $bike_id) continue;
            if ($count >= 3) break;
            $count++;
            
            require 'includes/components/bike_card.php';
        endforeach; 
        ?>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
