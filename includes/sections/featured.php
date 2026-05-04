<!-- Dynamic Featured Section -->
<section id="featured" class="featured-section">
    <div class="section-header">
        <h2>Featured <span class="text-accent">Models</span></h2>
        <p>Our top-rated bicycles, curated just for you.</p>
    </div>
    
    <div class="bikes-grid">
        <?php foreach($featured_bikes as $bike): ?>
            <?php require 'includes/components/bike_card.php'; ?>
        <?php endforeach; ?>
    </div>
</section>
