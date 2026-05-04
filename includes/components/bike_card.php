<?php
// Reusable bike card component
// Expects $bike array to be available in the scope where this is included
?>
<div class="bike-card">
    <a href="product.php?id=<?php echo $bike['id']; ?>" class="bike-link">
        <div class="bike-img-wrapper">
            <img src="<?php echo $bike['image']; ?>" alt="<?php echo $bike['name']; ?>">
            <div class="bike-type-badge"><?php echo $bike['type']; ?></div>
        </div>
    </a>
    <div class="bike-info">
        <a href="product.php?id=<?php echo $bike['id']; ?>" class="bike-link">
            <h3><?php echo $bike['name']; ?></h3>
        </a>
        <div class="bike-price-row">
            <span class="price"><?php echo $bike['price']; ?></span>
            <div style="display: flex; gap: 0.5rem;">
                <a href="login.php" class="btn btn-icon" title="Add to Cart"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="product.php?id=<?php echo $bike['id']; ?>" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View Details</a>
            </div>
        </div>
    </div>
</div>
