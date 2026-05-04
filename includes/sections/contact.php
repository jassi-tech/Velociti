<!-- Contact Section with PHP Form Processing -->
<section id="contact" class="contact-section">
    <div class="contact-container">
        <div class="contact-info">
            <h2>Ready to <span class="text-accent">Ride?</span></h2>
            <p>Visit our showroom or get in touch with our experts to find your perfect fit.</p>
            <div class="contact-details">
                <div class="contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>123 Cyclist Way, Velocity City, VC 90210</span>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>+1 (800) 555-RIDE</span>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>hello@velociti.bikes</span>
                </div>
            </div>
        </div>
        
        <div class="contact-form-wrapper">
            <?php echo isset($message_status) ? $message_status : ''; ?>
            <form action="index.php#contact" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="john@example.com">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" name="submit_contact" class="btn btn-primary btn-block">Send Message <i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</section>
