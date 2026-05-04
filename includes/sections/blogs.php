<!-- Blog Section -->
<section id="journal" class="blog-section">
    <div class="section-header">
        <h2>The <span class="text-accent">Journal</span></h2>
        <p>Latest news, guides, and stories from the cycling world.</p>
    </div>
    
    <div class="blog-grid">
        <?php foreach($blog_posts as $post): ?>
            <article class="blog-card">
                <div class="blog-image">
                    <a href="blog.php?id=<?php echo $post['id']; ?>">
                        <img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>">
                    </a>
                    <div class="blog-category"><?php echo $post['category']; ?></div>
                </div>
                <div class="blog-content">
                    <span class="blog-date"><i class="fa-regular fa-calendar"></i> <?php echo $post['date']; ?></span>
                    <h3><a href="blog.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                    <p><?php echo $post['excerpt']; ?></p>
                    <a href="blog.php?id=<?php echo $post['id']; ?>" class="read-more">Read Article <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
