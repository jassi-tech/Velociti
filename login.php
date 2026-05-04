<?php
$page_title = 'Login / Sign Up | Velociti';
require_once 'includes/header.php';
?>

<section class="auth-section">
    <div class="auth-container">
        <div class="auth-tabs">
            <button class="auth-tab active" onclick="switchTab('login', event)">Login</button>
            <button class="auth-tab" onclick="switchTab('signup', event)">Sign Up</button>
        </div>

        <!-- Login Form -->
        <form id="login-form" class="auth-form active" onsubmit="handleAuth(event, 'Login simulated successfully!')">
            <div class="form-group">
                <label for="login-email">Email Address</label>
                <input type="email" id="login-email" name="email" required placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            <div class="auth-footer">
                <a href="#">Forgot your password?</a>
            </div>
        </form>

        <!-- Sign Up Form -->
        <form id="signup-form" class="auth-form" onsubmit="handleAuth(event, 'Account created successfully!')">
            <div class="form-group">
                <label for="signup-name">Full Name</label>
                <input type="text" id="signup-name" name="name" required placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="signup-email">Email Address</label>
                <input type="email" id="signup-email" name="email" required placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="signup-password">Password</label>
                <input type="password" id="signup-password" name="password" required placeholder="Create a strong password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
        </form>
    </div>
</section>

<script>
function handleAuth(event, message) {
    event.preventDefault(); // Prevent actual form submission/reload
    showToast(message, 'success');
    event.target.reset(); // Optional: clear form fields after success
}

function switchTab(tab, event) {
    // Update tabs
    document.querySelectorAll('.auth-tab').forEach(t => t.classList.remove('active'));
    event.target.classList.add('active');
    
    // Update forms
    document.querySelectorAll('.auth-form').forEach(f => f.classList.remove('active'));
    document.getElementById(tab + '-form').classList.add('active');
}
</script>

<?php require_once 'includes/footer.php'; ?>
