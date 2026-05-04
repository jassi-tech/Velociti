<!-- Testimonials Section -->
<section id="reviews" class="testimonials-section">
    <div class="section-header">
        <h2>Rider <span class="text-accent">Experiences</span></h2>
        <p>Don't just take our word for it. Hear from the Velociti community.</p>
    </div>
    
    <div class="testimonials-grid">
        <?php foreach($testimonials as $review): ?>
            <div class="testimonial-card">
                <i class="fa-solid fa-quote-left quote-icon"></i>
                <p class="testimonial-content">"<?php echo $review['content']; ?>"</p>
                <div class="testimonial-author">
                    <img src="<?php echo $review['image']; ?>" alt="<?php echo $review['name']; ?>">
                    <div class="author-info">
                        <h4><?php echo $review['name']; ?></h4>
                        <span><?php echo $review['role']; ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
